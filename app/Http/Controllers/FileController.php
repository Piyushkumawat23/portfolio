<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class FileController extends Controller
{
    // A constant for the base upload path
    private const UPLOAD_PATH = 'uploads/files';

    /**
     * Show the file upload form page with a list of all existing files.
     */
    public function showUploadForm()
    {
        $directory = public_path(self::UPLOAD_PATH);
        $files = [];

        if (File::exists($directory)) {
            $allFiles = File::allFiles($directory);

            foreach ($allFiles as $file) {
                $type = $file->getExtension();
                
                $files[] = [
                    'url' => asset('public/'.self::UPLOAD_PATH . '/' . $file->getRelativePathname()),
                    'name' => $file->getFilename(),
                    'size' => $this->formatBytes($file->getSize()),
                    'type' => $type,
                    'last_modified' => date('Y-m-d H:i:s', $file->getMTime()),
                    'is_image' => in_array($type, ['jpg', 'jpeg', 'png', 'webp']),
                    'path' => $file->getRelativePathname()
                ];
            }
        }
        
        return view('admin.fileupload.index', compact('files'));
    }

    /**
     * Handle the file upload and conversion.
     */
    public function upload(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required|file|mimes:jpg,jpeg,png,webp,pdf|max:20480',
            ]);

            $uploadedFile = $request->file('file');
            $originalExtension = strtolower($uploadedFile->getClientOriginalExtension());
            $filename = Str::random(20) . '.' . $originalExtension;
            $destinationPath = public_path(self::UPLOAD_PATH . '/' . date('Y/m'));
            
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }
            
            // Check if the file is an image and convert it to WEBP
            if (in_array($originalExtension, ['jpg', 'jpeg', 'png'])) {
                $convertedFilename = Str::random(20) . '.webp';
                $image = Image::make($uploadedFile);
                $image->encode('webp', 100);
                $image->save($destinationPath . '/' . $convertedFilename);

                $finalFilename = $convertedFilename;
            } else {
                // For non-image files, just move it to the destination
                $uploadedFile->move($destinationPath, $filename);
                $finalFilename = $filename;
            }
            
            // Return to the index page with a success message
            return redirect()->route('admin.uploads.index')->with('success', 'File uploaded successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    // Helper function to format file size
    private function formatBytes($bytes, $precision = 2) {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= (1 << (10 * $pow));
        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    public function destroy(Request $request)
    {
        $path = public_path(self::UPLOAD_PATH . '/' . $request->input('path'));

        if (File::exists($path)) {
            File::delete($path);
            return redirect()->back()->with('success', 'File deleted successfully!');
        }

        return redirect()->back()->with('error', 'File not found!');
    }
}