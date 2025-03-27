<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function theme() { return view('admin.pages.generate.theme'); }
    public function smallBox() { return view('admin.pages.widgets.small-box'); }
    public function infoBox() { return view('admin.pages.widgets.info-box'); }
    public function cards() { return view('admin.pages.widgets.cards'); }

    public function unfixedSidebar() { return view('admin.pages.layout.unfixed-sidebar'); }
    public function fixedSidebar() { return view('admin.pages.layout.fixed-sidebar'); }
    public function customArea() { return view('admin.pages.layout.custom-area'); }
    public function sidebarMini() { return view('admin.pages.layout.sidebar-mini'); }
    public function collapsedSidebar() { return view('admin.pages.layout.collapsed-sidebar'); }
    public function logoSwitch() { return view('admin.pages.layout.logo-switch'); }
    public function layoutRtl() { return view('admin.pages.layout.layout-rtl'); }

    public function generalUI() { return view('admin.pages.UI.general'); }
    public function icons() { return view('admin.pages.UI.icons'); }
    public function timeline() { return view('admin.pages.UI.timeline'); }

    public function generalForms() { return view('admin.pages.forms.general'); }
    public function simpleTables() { return view('admin.pages.tables.simple'); }

    public function login() { return view('admin.pages.examples.login'); }
    public function register() { return view('admin.pages.examples.register'); }
    public function loginV2() { return view('admin.pages.examples.login-v2'); }
    public function registerV2() { return view('admin.pages.examples.register-v2'); }
    public function lockscreen() { return view('admin.pages.examples.lockscreen'); }

    public function docsIntroduction() { return view('admin.pages.docs.introduction'); }
    public function docsColorMode() { return view('admin.pages.docs.color-mode'); }
    public function mainHeader() { return view('admin.pages.docs.components.main-header'); }
    public function mainSidebar() { return view('admin.pages.docs.components.main-sidebar'); }
    public function treeView() { return view('admin.pages.docs.javascript.treeview'); }
    public function browserSupport() { return view('admin.pages.docs.browser-support'); }
    public function howToContribute() { return view('admin.pages.docs.how-to-contribute'); }
    public function faq() { return view('admin.pages.docs.faq'); }
    public function license() { return view('admin.pages.docs.license'); }
}
