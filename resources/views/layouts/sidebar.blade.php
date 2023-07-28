<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('frontend') }}/images/avatar/1.png" width="20" alt="" />
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b>Admin</b></span>
                        <small class="text-end font-w400">Admin@gmail.com</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ asset('frontend') }}/app-profile.html" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ms-2">Profile </span>
                    </a>
                    <a href="{{ asset('frontend') }}/login.html" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Laporan Kegiatan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/kegiatan">Kegiatan Harian</a></li>
                    <li><a href="/lab/history">Riwayat Kegiatan</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-043-menu"></i>
                    <span class="nav-text">Master</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/diagnosa">Diagnosa</a></li>
                    <li><a href="/jabatan">Jabatan</a></li>
                    <li><a href="/unitkerja">Unit Kerja</a></li>
                    <li><a href="/skp">SKP</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Setting</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/user">Pengguna</a></li>
                    <li><a href="{{ asset('frontend') }}/page-register.html">Ubah Pasword</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p><strong>BLUD Rumah Sakit KONAWE</strong> © <?= date('Y') ?> All Rights Reserved</p>
        </div>
    </div>
</div>
