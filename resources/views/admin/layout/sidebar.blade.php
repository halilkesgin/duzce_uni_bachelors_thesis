<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin/home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_setting') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting">
                    <i class="fas fa-cog"></i>
                    <span>Ayarlar</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-copy"></i>
                    <span>Kurumsal</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_page_about') }}">
                            <i class="fas fa-angle-right"></i>Misyon ve Vizyon
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/page/history') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_page_history') }}">
                            <i class="fas fa-angle-right"></i>Tarihçe
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/photo/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_photo_show') }}">
                            <i class="fas fa-angle-right"></i>Fotoğraflar
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/video/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_video_show') }}">
                            <i class="fas fa-angle-right"></i>Videolar
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-copy"></i>
                    <span>Yönetim</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/management/rector') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_management_rector') }}">
                            <i class="fas fa-angle-right"></i>Rektör
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/advisor/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_advisor_show') }}">
                            <i class="fas fa-angle-right"></i>Rektör Yardımcıları
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/secretary/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_secretary_show') }}">
                            <i class="fas fa-angle-right"></i>Genel Sekreter
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/senate/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_senate_show') }}">
                            <i class="fas fa-angle-right"></i>Senato
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/council/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_council_show') }}">
                            <i class="fas fa-angle-right"></i>Yönetim Kurulu
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-copy"></i>
                    <span>Mevzuat</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/senate_decision/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_senate_decision_show') }}">
                            <i class="fas fa-angle-right"></i>Senato Kararları
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-copy"></i>
                    <span>Fakülteler</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/faculty/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_faculty_show') }}">
                            <i class="fas fa-angle-right"></i>Liste
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/department/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_department_show') }}">
                            <i class="fas fa-angle-right"></i>Bölümler
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/facpost/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_facpost_show') }}">
                            <i class="fas fa-angle-right"></i>Duyuru
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-copy"></i>
                    <span>Meslek Yüksekokulları</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/vocational/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_vocational_show') }}">
                            <i class="fas fa-angle-right"></i>Liste
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/voc_department/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_voc_department_show') }}">
                            <i class="fas fa-angle-right"></i>Bölümler
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/voc_post/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_voc_post_show') }}">
                            <i class="fas fa-angle-right"></i>Duyuru
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-copy"></i>
                    <span>Araştırma</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/research-center/show') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_researchcenter_show') }}">
                            <i class="fas fa-angle-right"></i>Araştırma Merkezleri
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#">
                            <i class="fas fa-angle-right"></i>Labarotuvar Envanteri
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#">
                            <i class="fas fa-angle-right"></i>Yayınlanan Projeler
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#">
                            <i class="fas fa-angle-right"></i>Teknoloji Transfer Ofisi
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/announcement/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_announcement_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Genel Duyurular">
                    <i class="fas fa-copy"></i>
                    <span>Genel Duyurular</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/news/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_news_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Haberler">
                    <i class="fas fa-copy"></i>
                    <span>Haberler</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/event/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_event_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Etkinlikler">
                    <i class="fas fa-copy"></i>
                    <span>Etkinlikler</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_faq_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Sıkça Sorulan Sorular">
                    <i class="fas fa-copy"></i>
                    <span>Sıkça Sorulan Sorular</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_slider_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Slider">
                    <i class="fas fa-copy"></i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/access/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_access_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Hızlı Erişim">
                    <i class="fas fa-copy"></i>
                    <span>Hızlı Erişim</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/social-item/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin_social_item_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Sosyal Medyalar">
                    <i class="fas fa-copy"></i>
                    <span>Sosyal Medyalar</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
