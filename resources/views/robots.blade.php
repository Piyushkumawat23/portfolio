# Allow all crawlers by default
User-agent: *
Disallow: /admin/           # Block admin panel
Disallow: /login            # Block login page
Disallow: /logout           # Block logout route
Disallow: /public/assets/   # Block asset directories
Disallow: /storage/         # Block storage files
Allow: /                    # Explicitly allow homepage
Allow: /about               # Allow key pages
Allow: /portfolio
Allow: /blog
Allow: /contact
Allow: /testimonial
Allow: /faq

# Sitemaps for better indexing
Sitemap: https://piyushkumawat.in/sitemap.xml

# Block specific bots from crawling sensitive areas
User-agent: BadBot
Disallow: /