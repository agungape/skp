 <!--**********************************
            Nav header start
        ***********************************-->
 <div class="nav-header">
     <a href="" class="brand-logo">
         <img src="{{ asset('frontend') }}/images/profile/blud.png" width="50px" height="43px" alt="" />
         <h6 class="brand-title" width="124px" height="33px">
             <b>Lab</b>
         </h6>
     </a>
     <div class="nav-control">
         <div class="hamburger">
             <span class="line"></span><span class="line"></span><span class="line"></span>
         </div>
     </div>
 </div>
 <!--**********************************
            Nav header end
        ***********************************-->

 <!--**********************************
            Chat box start
        ***********************************-->
 <div class="chatbox">
     <div class="chatbox-close"></div>
     <div class="custom-tab-1">
         <div class="tab-content">
             <div class="tab-pane fade active show" id="chat" role="tabpanel">
                 <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
                     <div class="card-header chat-list-header text-center">
                         <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect fill="#000000" x="4" y="11" width="16" height="2"
                                         rx="1" />
                                     <rect fill="#000000" opacity="0.3"
                                         transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                         x="4" y="11" width="16" height="2" rx="1" />
                                 </g>
                             </svg></a>
                         <div>
                             <h6 class="mb-1">Chat List</h6>
                             <p class="mb-0">Show All</p>
                         </div>
                         <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                 viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect x="0" y="0" width="24" height="24" />
                                     <circle fill="#000000" cx="5" cy="12" r="2" />
                                     <circle fill="#000000" cx="12" cy="12" r="2" />
                                     <circle fill="#000000" cx="19" cy="12" r="2" />
                                 </g>
                             </svg></a>
                     </div>
                     <div class="card-body contacts_body p-0 dlab-scroll  " id="dlab_W_Contacts_Body">
                         <ul class="contacts">
                             <li class="name-first-letter">A</li>
                             <li class="active dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Archie Parker</span>
                                         <p>Kalid is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Alfie Mason</span>
                                         <p>Taherah left 7 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/3.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>AharlieKane</span>
                                         <p>Sami is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/4.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Athan Jacoby</span>
                                         <p>Nargis left 30 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">B</li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/5.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Bashid Samim</span>
                                         <p>Rashid left 50 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Breddie Ronan</span>
                                         <p>Kalid is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Ceorge Carson</span>
                                         <p>Taherah left 7 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">D</li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/3.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Darry Parker</span>
                                         <p>Sami is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/4.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Denry Hunter</span>
                                         <p>Nargis left 30 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">J</li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/5.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Jack Ronan</span>
                                         <p>Rashid left 50 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Jacob Tucker</span>
                                         <p>Kalid is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>James Logan</span>
                                         <p>Taherah left 7 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/3.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Joshua Weston</span>
                                         <p>Sami is online</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="name-first-letter">O</li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/4.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Oliver Acker</span>
                                         <p>Nargis left 30 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="dlab-chat-user">
                                 <div class="d-flex bd-highlight">
                                     <div class="img_cont">
                                         <img src="{{ asset('frontend') }}/images/avatar/5.jpg"
                                             class="rounded-circle user_img" alt="" />
                                         <span class="online_icon offline"></span>
                                     </div>
                                     <div class="user_info">
                                         <span>Oscar Weston</span>
                                         <p>Rashid left 50 mins ago</p>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="card chat dlab-chat-history-box d-none">
                     <div class="card-header chat-list-header text-center">
                         <a href="javascript:void(0);" class="dlab-chat-history-back">
                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <polygon points="0 0 24 0 24 24 0 24" />
                                     <rect fill="#000000" opacity="0.3"
                                         transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                         x="14" y="7" width="2" height="10"
                                         rx="1" />
                                     <path
                                         d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                         fill="#000000" fill-rule="nonzero"
                                         transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                 </g>
                             </svg>
                         </a>
                         <div>
                             <h6 class="mb-1">Chat with Khelesh</h6>
                             <p class="mb-0 text-success">Online</p>
                         </div>
                         <div class="dropdown">
                             <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <rect x="0" y="0" width="24" height="24" />
                                         <circle fill="#000000" cx="5" cy="12" r="2" />
                                         <circle fill="#000000" cx="12" cy="12" r="2" />
                                         <circle fill="#000000" cx="19" cy="12" r="2" />
                                     </g>
                                 </svg></a>
                             <ul class="dropdown-menu dropdown-menu-end">
                                 <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View
                                     profile</li>
                                 <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
                                     btn-close friends</li>
                                 <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group
                                 </li>
                                 <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                             </ul>
                         </div>
                     </div>
                     <div class="card-body msg_card_body dlab-scroll" id="dlab_W_Contacts_Body3">
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Hi, how are you samim?
                                 <span class="msg_time">8:40 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Hi Khalid i am good tnx how about you?
                                 <span class="msg_time_send">8:55 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am good too, thank you for your chat template
                                 <span class="msg_time">9:00 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 You are welcome
                                 <span class="msg_time_send">9:05 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am looking for your next templates
                                 <span class="msg_time">9:07 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Ok, thank you have a good day
                                 <span class="msg_time_send">9:10 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Bye, see you
                                 <span class="msg_time">9:12 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Hi, how are you samim?
                                 <span class="msg_time">8:40 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Hi Khalid i am good tnx how about you?
                                 <span class="msg_time_send">8:55 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am good too, thank you for your chat template
                                 <span class="msg_time">9:00 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 You are welcome
                                 <span class="msg_time_send">9:05 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 I am looking for your next templates
                                 <span class="msg_time">9:07 AM, Today</span>
                             </div>
                         </div>
                         <div class="d-flex justify-content-end mb-4">
                             <div class="msg_cotainer_send">
                                 Ok, thank you have a good day
                                 <span class="msg_time_send">9:10 AM, Today</span>
                             </div>
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/2.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                         </div>
                         <div class="d-flex justify-content-start mb-4">
                             <div class="img_cont_msg">
                                 <img src="{{ asset('frontend') }}/images/avatar/1.jpg"
                                     class="rounded-circle user_img_msg" alt="" />
                             </div>
                             <div class="msg_cotainer">
                                 Bye, see you
                                 <span class="msg_time">9:12 AM, Today</span>
                             </div>
                         </div>
                     </div>
                     <div class="card-footer type_msg">
                         <div class="input-group">
                             <textarea class="form-control" placeholder="Type your message..."></textarea>
                             <div class="input-group-append">
                                 <button type="button" class="btn btn-primary"><i
                                         class="fa fa-location-arrow"></i></button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--**********************************
            Chat box End
        ***********************************-->

 <!--**********************************
            Header start
        ***********************************-->
 <div class="header">
     <div class="header-content">
         <nav class="navbar navbar-expand">
             <div class="collapse navbar-collapse justify-content-between">
                 <div class="header-left">
                     <div class="dashboard_bar">
                         @yield('title')
                     </div>
                 </div>
                 <ul class="navbar-nav header-right">
                     <li class="nav-item dropdown notification_dropdown">
                         <a class="nav-link bell bell-link" href="javascript:void(0);">
                             <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                     d="M27 7.88883C27 5.18897 24.6717 3 21.8 3C17.4723 3 10.5277 3 6.2 3C3.3283 3 1 5.18897 1 7.88883V23.7776C1 24.2726 1.31721 24.7174 1.80211 24.9069C2.28831 25.0963 2.8473 24.9912 3.2191 24.6417C3.2191 24.6417 5.74629 22.2657 7.27769 20.8272C7.76519 20.3688 8.42561 20.1109 9.11591 20.1109H21.8C24.6717 20.1109 27 17.922 27 15.2221V7.88883ZM24.4 7.88883C24.4 6.53951 23.2365 5.44441 21.8 5.44441C17.4723 5.44441 10.5277 5.44441 6.2 5.44441C4.7648 5.44441 3.6 6.53951 3.6 7.88883V20.8272L5.4382 19.0989C6.4132 18.1823 7.73661 17.6665 9.11591 17.6665H21.8C23.2365 17.6665 24.4 16.5726 24.4 15.2221V7.88883ZM7.5 15.2221H17.9C18.6176 15.2221 19.2 14.6745 19.2 13.9999C19.2 13.3252 18.6176 12.7777 17.9 12.7777H7.5C6.7824 12.7777 6.2 13.3252 6.2 13.9999C6.2 14.6745 6.7824 15.2221 7.5 15.2221ZM7.5 10.3333H20.5C21.2176 10.3333 21.8 9.7857 21.8 9.11104C21.8 8.43638 21.2176 7.88883 20.5 7.88883H7.5C6.7824 7.88883 6.2 8.43638 6.2 9.11104C6.2 9.7857 6.7824 10.3333 7.5 10.3333Z"
                                     fill="#4f7086" />
                             </svg>
                             <span class="badge light text-white bg-primary rounded-circle">5</span>
                         </a>
                     </li>

                 </ul>
             </div>
         </nav>
     </div>
 </div>
 <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
