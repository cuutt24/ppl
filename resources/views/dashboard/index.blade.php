@extends('dashboard.layouts.main')

@section('container')
    <style>
        .bg-success {
            background-color: rgb(41, 173, 178)!important; /* Tambahkan !important untuk memastikan overide */
        }
        /* .text-bg-success {
            background-color: rgb(41, 173, 178)!important; /* Tambahkan !important untuk memastikan overide */

        /* Typewriter effect 1 */
        @keyframes typing {

            0%,
            1% {
                content: "";
            }

            1%,
            2% {
                content: "S";
            }

            2%,
            3% {
                content: "Se";
            }

            3%,
            4% {
                content: "Sel";
            }

            4%,
            5% {
                content: "Sela";
            }

            5%,
            6% {
                content: "Selam";
            }

            6%,
            7% {
                content: "Selamat";
            }

            7%,
            8% {
                content: "Selamat Da";
            }

            8%,
            9% {
                content: "Selamat Data";
            }

            10%,
            25% {
                content: "Selamat Datang";
            }

            52%,
            55% {
                content: "";
            }

            56%,
            57% {
                content: "W";
            }

            58%,
            59% {
                content: "We";
            }

            60%,
            61% {
                content: "Web";
            }

            62%,
            63% {
                content: "Webs";
            }

            64%,
            65% {
                content: "Webs";
            }

            66%,
            67% {
                content: "Websi";
            }

            68%,
            69% {
                content: "Website";
            }

            70%,
            71% {
                content: "Website D";
            }

            72%,
            73% {
                content: "Website De";
            }

            74%,
            75% {
                content: "Website Desa";
            }

            76%,
            77% {
                content: "Website Desa S";
            }

            78%,
            79% {
                content: "Website Desa Su";
            }
            80%,
            82% {
                content: "Website Desa Sum";
            }
            83%,
            85% {
                content: "Website Desa Sumb";
            }
            86%,
            87%{
                content: "Website Desa Sumbe";
            }
            88%,
            90%{
                content: "Website Desa Sumber";
            }
            91%,
            93%{
                content: "Website Desa Sumber R";
            }
            94%,
            95%{
                content: "Website Desa Sumber Re";
            }
            96%,
            97%{
                content: "Website Desa Sumber Rej";
            }
            98%,
            100% {
                content: "Website Desa Sumber Rejo";
            }
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .typewriter {
            --caret: currentcolor;
        }

        .typewriter::before {
            content: "";
            animation: typing 13.5s infinite;
        }

        .typewriter::after {
            content: "";
            border-right: 1px solid var(--caret);
            animation: blink 0.5s linear infinite;
        }

        .typewriter.thick::after {
            border-right: 1ch solid var(--caret);
        }

        .typewriter.nocaret::after {
            border-right: 0;
        }


        @media (prefers-reduced-motion) {
            .typewriter::after {
                animation: none;
            }

            @keyframes sequencePopup {

                0%,
                100% {
                    content: "Selamat Datang!";
                }

                25% {
                    content: "Website Desa Sumber Rejo";
                }

                50% {
                    content: "reader";
                }

                75% {
                    content: "human";
                }
            }

            .typewriter::before {
                content: "Selamat Datang!";
                animation: sequencePopup 12s linear infinite;
            }
        }
    </style>
    <style>
        a:hover {
            color: rgb(47, 154, 213);
        }

        a {
            color: rgb(7, 102, 173);
            text-decoration: none;
        }
    </style>
    <div class=" px-md-5 px-sm-0 mx-5">
        <div class="mx-md-5 mx-sm-4 my-4 px-md-2 px-sm-0">
            <div class="card text-bg-light mb-3">
                <div class="card-body">
                    <a href="/dashboard">
                        <svg fill="#000000" width="18px" height="18px" viewBox="-4.5 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>home</title>
                                <path
                                    d="M19.469 12.594l3.625 3.313c0.438 0.406 0.313 0.719-0.281 0.719h-2.719v8.656c0 0.594-0.5 1.125-1.094 1.125h-4.719v-6.063c0-0.594-0.531-1.125-1.125-1.125h-2.969c-0.594 0-1.125 0.531-1.125 1.125v6.063h-4.719c-0.594 0-1.125-0.531-1.125-1.125v-8.656h-2.688c-0.594 0-0.719-0.313-0.281-0.719l10.594-9.625c0.438-0.406 1.188-0.406 1.656 0l2.406 2.156v-1.719c0-0.594 0.531-1.125 1.125-1.125h2.344c0.594 0 1.094 0.531 1.094 1.125v5.875z">
                                </path>
                            </g>
                        </svg></a> / Dashboard
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="card text-bg-success bg-gradient mb-3 bg-opacity-100">
                        <div class="card-header fw-semibold">Dashboard Sistem Informasi Desa Sumber Rejo</div>
                        <div class="card-body">
                            <h4 class=" responsive-p1 fw-semibold mb-3">Welcome back, {{ Auth()->user()->name }}!</h4>
                            <h5 class="fw-semibold">
                                <span class="badge badge-lg rounded-pill text-bg-warning">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M6.07194 6.26794L6.57194 5.40192L6.07194 6.26794ZM4.70592 6.63397L3.83989 6.13397L3.83989 6.13397L4.70592 6.63397ZM3.70592 8.36602L2.83989 7.86602H2.83989L3.70592 8.36602ZM4.07194 9.73205L3.57194 10.5981H3.57194L4.07194 9.73205ZM4.07194 14.2679L3.57194 13.4019H3.57194L4.07194 14.2679ZM3.70592 15.634L4.57194 15.134H4.57194L3.70592 15.634ZM4.70592 17.366L3.83989 17.866H3.83989L4.70592 17.366ZM6.07194 17.732L6.57194 18.5981L6.07194 17.732ZM17.9284 17.732L17.4283 18.5981L17.4284 18.5981L17.9284 17.732ZM19.2944 17.366L18.4284 16.866L19.2944 17.366ZM20.2944 15.634L21.1604 16.134L20.2944 15.634ZM19.9284 14.2679L19.4284 15.134V15.134L19.9284 14.2679ZM19.9284 9.73205L20.4284 10.5981V10.5981L19.9284 9.73205ZM20.2944 8.36602L19.4284 8.86602L19.4284 8.86602L20.2944 8.36602ZM19.2944 6.63397L18.4284 7.13397L19.2944 6.63397ZM17.9284 6.26794L18.4284 7.13397L17.9284 6.26794ZM14.6514 6.61604L14.2089 7.51283L14.6514 6.61604ZM16.5119 7.08573L17.0119 7.95175L16.5119 7.08573ZM15.336 7.01204L14.7793 7.84277L15.336 7.01204ZM17.9873 11.6035L16.9894 11.6686L17.9873 11.6035ZM18.5118 10.5499L18.0118 9.68388L18.5118 10.5499ZM15.336 16.988L14.7793 16.1572L15.336 16.988ZM16.5119 16.9143L16.0119 17.7803L16.5119 16.9143ZM18.5118 13.4501L18.0118 14.3161L18.5118 13.4501ZM9.34892 17.384L9.79137 16.4872L9.34892 17.384ZM7.48838 16.9143L6.98838 16.0482L7.48838 16.9143ZM8.6643 16.988L8.10763 17.8187L8.6643 16.988ZM14.6514 17.384L15.0938 18.2808L14.6514 17.384ZM5.48852 10.5499L4.98852 11.4159L5.48852 10.5499ZM6.01304 11.6035L5.01516 11.5385L6.01304 11.6035ZM7.48839 7.08573L6.98839 7.95176L7.48839 7.08573ZM11.0001 4V4V2C9.89558 2 9.00015 2.89543 9.00015 4H11.0001ZM11.0001 5.63424V4H9.00015V5.63424H11.0001ZM9.22099 7.84277C9.40312 7.72073 9.59361 7.6104 9.79137 7.51283L8.90647 5.71924C8.62922 5.85603 8.36245 6.01056 8.10764 6.18131L9.22099 7.84277ZM5.57194 7.13397L6.98839 7.95176L7.98839 6.2197L6.57194 5.40192L5.57194 7.13397ZM5.57194 7.13397L6.57194 5.40192C5.61536 4.84963 4.39218 5.17738 3.83989 6.13397L5.57194 7.13397ZM4.57194 8.86602L5.57194 7.13397L3.83989 6.13397L2.83989 7.86602L4.57194 8.86602ZM4.57194 8.86602L4.57194 8.86602L2.83989 7.86602C2.28761 8.82261 2.61536 10.0458 3.57194 10.5981L4.57194 8.86602ZM5.98852 9.68388L4.57194 8.86602L3.57194 10.5981L4.98852 11.4159L5.98852 9.68388ZM7.00015 12C7.00015 11.8885 7.00378 11.778 7.01092 11.6686L5.01516 11.5385C5.0052 11.6912 5.00015 11.8451 5.00015 12H7.00015ZM7.01092 12.3314C7.00378 12.222 7.00015 12.1115 7.00015 12H5.00015C5.00015 12.1549 5.0052 12.3088 5.01516 12.4615L7.01092 12.3314ZM4.57194 15.134L5.98852 14.3161L4.98852 12.5841L3.57194 13.4019L4.57194 15.134ZM4.57194 15.134L4.57194 15.134L3.57194 13.4019C2.61536 13.9542 2.28761 15.1774 2.83989 16.134L4.57194 15.134ZM5.57194 16.866L4.57194 15.134L2.83989 16.134L3.83989 17.866L5.57194 16.866ZM5.57194 16.866L5.57194 16.866L3.83989 17.866C4.39218 18.8226 5.61536 19.1504 6.57194 18.5981L5.57194 16.866ZM6.98838 16.0482L5.57194 16.866L6.57194 18.5981L7.98838 17.7803L6.98838 16.0482ZM9.79137 16.4872C9.59361 16.3896 9.40312 16.2793 9.22098 16.1572L8.10763 17.8187C8.36245 17.9894 8.62922 18.144 8.90647 18.2808L9.79137 16.4872ZM11.0001 20V18.3658H9.00015V20H11.0001ZM11.0001 20H9.00015C9.00015 21.1046 9.89558 22 11.0001 22V20ZM13.0001 20H11.0001V22H13.0001V20ZM13.0001 20V22C14.1047 22 15.0001 21.1046 15.0001 20H13.0001ZM13.0001 18.3658V20H15.0001V18.3658H13.0001ZM14.7793 16.1572C14.5972 16.2793 14.4067 16.3896 14.2089 16.4872L15.0938 18.2808C15.3711 18.144 15.6378 17.9894 15.8927 17.8187L14.7793 16.1572ZM18.4284 16.866L17.0119 16.0482L16.0119 17.7803L17.4283 18.5981L18.4284 16.866ZM18.4284 16.866H18.4283L17.4284 18.5981C18.3849 19.1504 19.6081 18.8226 20.1604 17.866L18.4284 16.866ZM19.4284 15.134L18.4284 16.866L20.1604 17.866L21.1604 16.134L19.4284 15.134ZM19.4284 15.134V15.134L21.1604 16.134C21.7127 15.1774 21.3849 13.9542 20.4284 13.4019L19.4284 15.134ZM18.0118 14.3161L19.4284 15.134L20.4284 13.4019L19.0118 12.5841L18.0118 14.3161ZM17.0001 12C17.0001 12.1115 16.9965 12.222 16.9894 12.3314L18.9851 12.4615C18.9951 12.3088 19.0001 12.1549 19.0001 12H17.0001ZM16.9894 11.6686C16.9965 11.778 17.0001 11.8885 17.0001 12H19.0001C19.0001 11.8451 18.9951 11.6912 18.9851 11.5385L16.9894 11.6686ZM19.4284 8.86602L18.0118 9.68388L19.0118 11.4159L20.4284 10.5981L19.4284 8.86602ZM19.4284 8.86602L19.4284 8.86602L20.4284 10.5981C21.3849 10.0458 21.7127 8.82261 21.1604 7.86602L19.4284 8.86602ZM18.4284 7.13397L19.4284 8.86602L21.1604 7.86602L20.1604 6.13397L18.4284 7.13397ZM18.4284 7.13397V7.13397L20.1604 6.13397C19.6081 5.17738 18.3849 4.84963 17.4284 5.40192L18.4284 7.13397ZM17.0119 7.95175L18.4284 7.13397L17.4284 5.40192L16.0119 6.2197L17.0119 7.95175ZM14.2089 7.51283C14.4067 7.6104 14.5972 7.72072 14.7793 7.84277L15.8927 6.18131C15.6378 6.01056 15.3711 5.85603 15.0938 5.71924L14.2089 7.51283ZM13.0001 4V5.63423H15.0001V4H13.0001ZM13.0001 4H15.0001C15.0001 2.89543 14.1047 2 13.0001 2V4ZM11.0001 4H13.0001V2H11.0001V4ZM15.0938 5.71924C15.0511 5.69815 15.0232 5.67053 15.0094 5.65025C14.9972 5.63248 15.0001 5.62788 15.0001 5.63423H13.0001C13.0001 6.50299 13.5491 7.18731 14.2089 7.51283L15.0938 5.71924ZM16.0119 6.2197C16.0174 6.21655 16.0149 6.22132 15.9937 6.21972C15.9694 6.21789 15.9319 6.20762 15.8927 6.18131L14.7793 7.84277C15.3915 8.25303 16.2594 8.38623 17.0119 7.95175L16.0119 6.2197ZM18.9851 11.5385C18.9821 11.4913 18.992 11.4537 19.0025 11.4318C19.0118 11.4126 19.0172 11.4128 19.0118 11.4159L18.0118 9.68388C17.2604 10.1177 16.9415 10.9342 16.9894 11.6686L18.9851 11.5385ZM15.8927 17.8187C15.9319 17.7924 15.9694 17.7821 15.9937 17.7803C16.0149 17.7787 16.0174 17.7834 16.0119 17.7803L17.0119 16.0482C16.2594 15.6138 15.3915 15.747 14.7793 16.1572L15.8927 17.8187ZM19.0118 12.5841C19.0172 12.5872 19.0118 12.5874 19.0025 12.5682C18.992 12.5462 18.9821 12.5087 18.9851 12.4615L16.9894 12.3314C16.9415 13.0658 17.2604 13.8823 18.0118 14.3161L19.0118 12.5841ZM8.90647 18.2808C8.94923 18.3019 8.97711 18.3295 8.99094 18.3497C9.00306 18.3675 9.00015 18.3721 9.00015 18.3658H11.0001C11.0001 17.497 10.4512 16.8127 9.79137 16.4872L8.90647 18.2808ZM7.98838 17.7803C7.98292 17.7834 7.98539 17.7787 8.00661 17.7803C8.03085 17.7821 8.06836 17.7924 8.10763 17.8187L9.22098 16.1572C8.60875 15.747 7.74092 15.6138 6.98838 16.0482L7.98838 17.7803ZM15.0001 18.3658C15.0001 18.3721 14.9972 18.3675 15.0094 18.3497C15.0232 18.3295 15.0511 18.3019 15.0938 18.2808L14.2089 16.4872C13.5491 16.8127 13.0001 17.497 13.0001 18.3658H15.0001ZM5.01516 12.4615C5.01823 12.5086 5.00833 12.5462 4.99777 12.5682C4.98851 12.5874 4.9831 12.5872 4.98852 12.5841L5.98852 14.3161C6.73991 13.8823 7.05882 13.0658 7.01092 12.3314L5.01516 12.4615ZM4.98852 11.4159C4.9831 11.4128 4.98851 11.4126 4.99777 11.4318C5.00833 11.4537 5.01823 11.4913 5.01516 11.5385L7.01092 11.6686C7.05882 10.9342 6.73991 10.1177 5.98852 9.68388L4.98852 11.4159ZM8.10764 6.18131C8.06837 6.20763 8.03085 6.21789 8.00662 6.21972C7.9854 6.22133 7.98293 6.21655 7.98839 6.2197L6.98839 7.95176C7.74092 8.38623 8.60876 8.25303 9.22099 7.84277L8.10764 6.18131ZM9.00015 5.63424C9.00015 5.62788 9.00306 5.63248 8.99094 5.65025C8.97711 5.67053 8.94923 5.69815 8.90647 5.71924L9.79137 7.51283C10.4512 7.18731 11.0001 6.50299 11.0001 5.63424H9.00015Z"
                                                fill="#000000"></path>
                                            <circle cx="12" cy="12" r="3" stroke="#000000"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        </g>
                                    </svg> {{ Auth()->user()->jabatan }}
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div class="card shadow-sm bg-light bg-gradient mb-3">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title fw-semibold responsive-p1 me-auto">Statistik Sistem</h4>
                            </div>
                            <hr>
                            <div class="row g-2 mb-3">
                                <div class="col-md-6 col-12">
                                    <div class="card text-white bg-success bg-gradient h-100">
                                        <div class="card-body">
                                            <h4 class="card-title">Pengguna</h4>
                                            <h1 class="fw-bold mb-0">{{ $countpengguna }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="card text-white bg-success bg-gradient h-100">
                                        <div class="card-body">
                                            <h4 class="card-title">Berita Desa</h4>
                                            <h1 class="fw-bold mb-0">{{ $countnews }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6 col-12">
                                    <div class="card text-white bg-success bg-gradient h-100">
                                        <div class="card-body">
                                            <h4 class="card-title">Kategori Berita</h4>
                                            <h1 class="fw-bold mb-0">{{ $countkategori }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="card text-white bg-success bg-gradient h-100">
                                        <div class="card-body">
                                            <h4 class="card-title ">Pengumuman</h4>
                                            <h1 class="fw-bold mb-0">{{ $countpengumuman }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ======================================================== --}}
                    <div class="card shadow-sm bg-light bg-gradient mb-3">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title fw-semibold responsive-p1 me-auto">Menu Utama</h4>
                            </div>
                            <hr>
                            <div class="row mb-3 g-2">
                                <div class="col">
                                    <div class="card text-white bg-success bg-gradient h-100"
                                        data-bss-hover-animate="pulse">
                                        <div class="d-flex justify-content-center align-items-center d-inline-block">
                                            <svg width="70px" height="70px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <a href="/dashboard/pengguna" class="stretched-link"></a>
                                        <h4 class="fw-bold text-center">Manajemen Pengguna</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success bg-gradient h-100"
                                        data-bss-hover-animate="pulse">
                                        <div class="d-flex justify-content-center align-items-center d-inline-block">
                                            <svg width="70px" height="70px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <g clip-path="url(#clip0_429_11031)">
                                                        <path
                                                            d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17"
                                                            stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20"
                                                            stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M13 8L7 8" stroke="#ffffff" stroke-width="2.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M13 12L9 12" stroke="#ffffff" stroke-width="2.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_429_11031">
                                                            <rect width="24" height="24" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </g>
                                            </svg>
                                        </div>
                                        <a href="/dashboard/news" class="stretched-link"></a>
                                        <h4 class="fw-bold text-center">Manajemen Berita</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success bg-gradient h-100"
                                        data-bss-hover-animate="pulse">
                                        <div class="d-flex justify-content-center align-items-center d-inline-block">
                                            <svg width="70px" height="70px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <g clip-path="url(#clip0_429_11031)">
                                                        <path
                                                            d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17"
                                                            stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20"
                                                            stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M13 8L7 8" stroke="#ffffff" stroke-width="2.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M13 12L9 12" stroke="#ffffff" stroke-width="2.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_429_11031">
                                                            <rect width="24" height="24" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </g>
                                            </svg>
                                        </div>
                                        <a href="/dashboard/kategori" class="stretched-link"></a>
                                        <h4 class="fw-bold text-center">Manajemen Kategori Berita</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success bg-gradient h-100"
                                        data-bss-hover-animate="pulse">
                                        <div class="d-flex justify-content-center align-items-center d-inline-block">
                                            <!DOCTYPE svg
                                                PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                            <div class="p-2 mt-1 mb-1">
                                                <svg fill="#ffffff" width="50px" height="50px"
                                                    viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#ffffff">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M959.342 1355.283c4.287.007 20.897.18 45.834 4.517l-3.388 55.341c-1.13 29.365-25.976 53.083-55.34 53.083-65.507 0-110.683 19.2-141.177 57.6-68.895 88.094-45.177 263.153-30.495 324.14 4.518 16.942 0 35.013-10.164 48.566-11.294 13.553-27.106 21.458-44.047 21.458h-212.33c-31.623 0-56.47-24.847-56.47-56.47v-508.235Zm627.82-1324.044c11.633-23.492 37.61-35.576 63.473-29.816 25.525 6.099 43.483 28.8 43.483 55.002V570.42C1822.87 596.623 1920 710.693 1920 847.013c0 136.32-97.13 250.504-225.882 276.706v513.883c0 26.202-17.958 49.016-43.483 55.002a57.279 57.279 0 0 1-12.988 1.468c-21.12 0-40.772-11.746-50.485-31.172C1379.238 1247.164 964.18 1242.307 960 1242.307H395.294c-155.746 0-282.353-126.607-282.353-282.352v-56.471h-56.47C25.299 903.484 0 878.298 0 847.014c0-31.172 25.299-56.471 56.47-56.471h56.471v-56.47c0-155.634 126.607-282.354 282.353-282.354h564.593c16.941-.113 420.48-7.002 627.275-420.48Z"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="/dashboard/announce" class="stretched-link"></a>
                                        <h4 class="fw-bold text-center">Manajemen Pengumuman</h4>
                                    </div>
                                </div>
                                <div class="row mb-3 g-2">
                                    <!-- Existing code for Manajemen Data Pegawai -->
                                    <!-- ... -->

                                    <!-- Manajemen Data Petugas -->
                                    <div class="col">
                                        <div class="card text-white bg-success bg-gradient h-100" data-bss-hover-animate="pulse">
                                            <div class="d-flex justify-content-center align-items-center d-inline-block">
                                                <svg width="70px" height="70px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                                    <!-- SVG content for the new management section -->
                                                    <!-- ... -->
                                                </svg>
                                            </div>
                                            <a href="/dashboard/new-management-1" class="stretched-link"></a>
                                            <h4 class="fw-bold text-center">New Management 1</h4>
                                        </div>
                                    </div>

                                    <!-- Manajemen Uji Kompetensi -->
                                    <div class="col">
                                        <div class="card text-white bg-success bg-gradient h-100" data-bss-hover-animate="pulse">
                                            <div class="d-flex justify-content-center align-items-center d-inline-block">
                                                <svg width="70px" height="70px" viewBox="0 0 512 512" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"
                                                stroke="#ffffff">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <title>report-text</title>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="add" fill="#ffffff"
                                                            transform="translate(42.666667, 85.333333)">
                                                            <path
                                                                d="M341.333333,1.42108547e-14 L426.666667,85.3333333 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L341.333333,1.42108547e-14 Z M330.666667,42.6666667 L42.6666667,42.6666667 L42.6666667,298.666667 L384,298.666667 L384,96 L330.666667,42.6666667 Z M149.333333,234.666667 L149.333333,266.666667 L85.3333333,266.666667 L85.3333333,234.666667 L149.333333,234.666667 Z M341.333333,234.666667 L341.333333,266.666667 L192,266.666667 L192,234.666667 L341.333333,234.666667 Z M149.333333,170.666667 L149.333333,202.666667 L85.3333333,202.666667 L85.3333333,170.666667 L149.333333,170.666667 Z M341.333333,170.666667 L341.333333,202.666667 L192,202.666667 L192,170.666667 L341.333333,170.666667 Z M149.333333,106.666667 L149.333333,138.666667 L85.3333333,138.666667 L85.3333333,106.666667 L149.333333,106.666667 Z M341.333333,106.666667 L341.333333,138.666667 L192,138.666667 L192,106.666667 L341.333333,106.666667 Z"
                                                                id="Combined-Shape"> </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            </div>
                                            <a href="/dashboard/new-management-2" class="stretched-link"></a>
                                            <h4 class="fw-bold text-center">New Management 2</h4>
                                        </div>
                                    </div>

                                    <!-- Manajemen New 3 -->
                                    <div class="col">
                                        <div class="card text-white bg-success bg-gradient h-100" data-bss-hover-animate="pulse">
                                            <div class="d-flex justify-content-center align-items-center d-inline-block">
                                                <svg width="70px" height="70px" viewBox="0 0 512 512" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"
                                                stroke="#ffffff">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <title>report-text</title>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="add" fill="#ffffff"
                                                            transform="translate(42.666667, 85.333333)">
                                                            <path
                                                                d="M341.333333,1.42108547e-14 L426.666667,85.3333333 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L341.333333,1.42108547e-14 Z M330.666667,42.6666667 L42.6666667,42.6666667 L42.6666667,298.666667 L384,298.666667 L384,96 L330.666667,42.6666667 Z M149.333333,234.666667 L149.333333,266.666667 L85.3333333,266.666667 L85.3333333,234.666667 L149.333333,234.666667 Z M341.333333,234.666667 L341.333333,266.666667 L192,266.666667 L192,234.666667 L341.333333,234.666667 Z M149.333333,170.666667 L149.333333,202.666667 L85.3333333,202.666667 L85.3333333,170.666667 L149.333333,170.666667 Z M341.333333,170.666667 L341.333333,202.666667 L192,202.666667 L192,170.666667 L341.333333,170.666667 Z M149.333333,106.666667 L149.333333,138.666667 L85.3333333,138.666667 L85.3333333,106.666667 L149.333333,106.666667 Z M341.333333,106.666667 L341.333333,138.666667 L192,138.666667 L192,106.666667 L341.333333,106.666667 Z"
                                                                id="Combined-Shape"> </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            </div>
                                            <a href="/dashboard/new-management-3" class="stretched-link"></a>
                                            <h4 class="fw-bold text-center">New Management 3</h4>
                                        </div>
                                    </div>

                                    <!-- Existing code for Manajemen Uji Kompetensi and other sections -->
                                    <!-- ... -->
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- BATAS --}}
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card bg-light bg-gradient shadow-sm sticky-top">
                        <div class="card-body">
                            <div class="container align-items-center justify-content-center d-flex">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M12 22.01C17.5228 22.01 22 17.5329 22 12.01C22 6.48716 17.5228 2.01001 12 2.01001C6.47715 2.01001 2 6.48716 2 12.01C2 17.5329 6.47715 22.01 12 22.01Z"
                                        fill="#292D32" />
                                    <path
                                        d="M12 6.93994C9.93 6.93994 8.25 8.61994 8.25 10.6899C8.25 12.7199 9.84 14.3699 11.95 14.4299C11.98 14.4299 12.02 14.4299 12.04 14.4299C12.06 14.4299 12.09 14.4299 12.11 14.4299C12.12 14.4299 12.13 14.4299 12.13 14.4299C14.15 14.3599 15.74 12.7199 15.75 10.6899C15.75 8.61994 14.07 6.93994 12 6.93994Z"
                                        fill="#292D32" />
                                    <path
                                        d="M18.7807 19.36C17.0007 21 14.6207 22.01 12.0007 22.01C9.3807 22.01 7.0007 21 5.2207 19.36C5.4607 18.45 6.1107 17.62 7.0607 16.98C9.7907 15.16 14.2307 15.16 16.9407 16.98C17.9007 17.62 18.5407 18.45 18.7807 19.36Z"
                                        fill="#292D32" />
                                </svg>
                            </div>
                            <h4 class="card-title fw-semibold text-center">{{ Auth()->user()->name }}</h4>
                            <h6 class="text-muted card-subtitle fw-semibold text-center mb-2" style="color:rgb(7, 102, 173);" ><span
                                    class="badge badge-lg rounded-pill text-bg-warning"> <svg width="24px"
                                        height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M6.07194 6.26794L6.57194 5.40192L6.07194 6.26794ZM4.70592 6.63397L3.83989 6.13397L3.83989 6.13397L4.70592 6.63397ZM3.70592 8.36602L2.83989 7.86602H2.83989L3.70592 8.36602ZM4.07194 9.73205L3.57194 10.5981H3.57194L4.07194 9.73205ZM4.07194 14.2679L3.57194 13.4019H3.57194L4.07194 14.2679ZM3.70592 15.634L4.57194 15.134H4.57194L3.70592 15.634ZM4.70592 17.366L3.83989 17.866H3.83989L4.70592 17.366ZM6.07194 17.732L6.57194 18.5981L6.07194 17.732ZM17.9284 17.732L17.4283 18.5981L17.4284 18.5981L17.9284 17.732ZM19.2944 17.366L18.4284 16.866L19.2944 17.366ZM20.2944 15.634L21.1604 16.134L20.2944 15.634ZM19.9284 14.2679L19.4284 15.134V15.134L19.9284 14.2679ZM19.9284 9.73205L20.4284 10.5981V10.5981L19.9284 9.73205ZM20.2944 8.36602L19.4284 8.86602L19.4284 8.86602L20.2944 8.36602ZM19.2944 6.63397L18.4284 7.13397L19.2944 6.63397ZM17.9284 6.26794L18.4284 7.13397L17.9284 6.26794ZM14.6514 6.61604L14.2089 7.51283L14.6514 6.61604ZM16.5119 7.08573L17.0119 7.95175L16.5119 7.08573ZM15.336 7.01204L14.7793 7.84277L15.336 7.01204ZM17.9873 11.6035L16.9894 11.6686L17.9873 11.6035ZM18.5118 10.5499L18.0118 9.68388L18.5118 10.5499ZM15.336 16.988L14.7793 16.1572L15.336 16.988ZM16.5119 16.9143L16.0119 17.7803L16.5119 16.9143ZM18.5118 13.4501L18.0118 14.3161L18.5118 13.4501ZM9.34892 17.384L9.79137 16.4872L9.34892 17.384ZM7.48838 16.9143L6.98838 16.0482L7.48838 16.9143ZM8.6643 16.988L8.10763 17.8187L8.6643 16.988ZM14.6514 17.384L15.0938 18.2808L14.6514 17.384ZM5.48852 10.5499L4.98852 11.4159L5.48852 10.5499ZM6.01304 11.6035L5.01516 11.5385L6.01304 11.6035ZM7.48839 7.08573L6.98839 7.95176L7.48839 7.08573ZM11.0001 4V4V2C9.89558 2 9.00015 2.89543 9.00015 4H11.0001ZM11.0001 5.63424V4H9.00015V5.63424H11.0001ZM9.22099 7.84277C9.40312 7.72073 9.59361 7.6104 9.79137 7.51283L8.90647 5.71924C8.62922 5.85603 8.36245 6.01056 8.10764 6.18131L9.22099 7.84277ZM5.57194 7.13397L6.98839 7.95176L7.98839 6.2197L6.57194 5.40192L5.57194 7.13397ZM5.57194 7.13397L6.57194 5.40192C5.61536 4.84963 4.39218 5.17738 3.83989 6.13397L5.57194 7.13397ZM4.57194 8.86602L5.57194 7.13397L3.83989 6.13397L2.83989 7.86602L4.57194 8.86602ZM4.57194 8.86602L4.57194 8.86602L2.83989 7.86602C2.28761 8.82261 2.61536 10.0458 3.57194 10.5981L4.57194 8.86602ZM5.98852 9.68388L4.57194 8.86602L3.57194 10.5981L4.98852 11.4159L5.98852 9.68388ZM7.00015 12C7.00015 11.8885 7.00378 11.778 7.01092 11.6686L5.01516 11.5385C5.0052 11.6912 5.00015 11.8451 5.00015 12H7.00015ZM7.01092 12.3314C7.00378 12.222 7.00015 12.1115 7.00015 12H5.00015C5.00015 12.1549 5.0052 12.3088 5.01516 12.4615L7.01092 12.3314ZM4.57194 15.134L5.98852 14.3161L4.98852 12.5841L3.57194 13.4019L4.57194 15.134ZM4.57194 15.134L4.57194 15.134L3.57194 13.4019C2.61536 13.9542 2.28761 15.1774 2.83989 16.134L4.57194 15.134ZM5.57194 16.866L4.57194 15.134L2.83989 16.134L3.83989 17.866L5.57194 16.866ZM5.57194 16.866L5.57194 16.866L3.83989 17.866C4.39218 18.8226 5.61536 19.1504 6.57194 18.5981L5.57194 16.866ZM6.98838 16.0482L5.57194 16.866L6.57194 18.5981L7.98838 17.7803L6.98838 16.0482ZM9.79137 16.4872C9.59361 16.3896 9.40312 16.2793 9.22098 16.1572L8.10763 17.8187C8.36245 17.9894 8.62922 18.144 8.90647 18.2808L9.79137 16.4872ZM11.0001 20V18.3658H9.00015V20H11.0001ZM11.0001 20H9.00015C9.00015 21.1046 9.89558 22 11.0001 22V20ZM13.0001 20H11.0001V22H13.0001V20ZM13.0001 20V22C14.1047 22 15.0001 21.1046 15.0001 20H13.0001ZM13.0001 18.3658V20H15.0001V18.3658H13.0001ZM14.7793 16.1572C14.5972 16.2793 14.4067 16.3896 14.2089 16.4872L15.0938 18.2808C15.3711 18.144 15.6378 17.9894 15.8927 17.8187L14.7793 16.1572ZM18.4284 16.866L17.0119 16.0482L16.0119 17.7803L17.4283 18.5981L18.4284 16.866ZM18.4284 16.866H18.4283L17.4284 18.5981C18.3849 19.1504 19.6081 18.8226 20.1604 17.866L18.4284 16.866ZM19.4284 15.134L18.4284 16.866L20.1604 17.866L21.1604 16.134L19.4284 15.134ZM19.4284 15.134V15.134L21.1604 16.134C21.7127 15.1774 21.3849 13.9542 20.4284 13.4019L19.4284 15.134ZM18.0118 14.3161L19.4284 15.134L20.4284 13.4019L19.0118 12.5841L18.0118 14.3161ZM17.0001 12C17.0001 12.1115 16.9965 12.222 16.9894 12.3314L18.9851 12.4615C18.9951 12.3088 19.0001 12.1549 19.0001 12H17.0001ZM16.9894 11.6686C16.9965 11.778 17.0001 11.8885 17.0001 12H19.0001C19.0001 11.8451 18.9951 11.6912 18.9851 11.5385L16.9894 11.6686ZM19.4284 8.86602L18.0118 9.68388L19.0118 11.4159L20.4284 10.5981L19.4284 8.86602ZM19.4284 8.86602L19.4284 8.86602L20.4284 10.5981C21.3849 10.0458 21.7127 8.82261 21.1604 7.86602L19.4284 8.86602ZM18.4284 7.13397L19.4284 8.86602L21.1604 7.86602L20.1604 6.13397L18.4284 7.13397ZM18.4284 7.13397V7.13397L20.1604 6.13397C19.6081 5.17738 18.3849 4.84963 17.4284 5.40192L18.4284 7.13397ZM17.0119 7.95175L18.4284 7.13397L17.4284 5.40192L16.0119 6.2197L17.0119 7.95175ZM14.2089 7.51283C14.4067 7.6104 14.5972 7.72072 14.7793 7.84277L15.8927 6.18131C15.6378 6.01056 15.3711 5.85603 15.0938 5.71924L14.2089 7.51283ZM13.0001 4V5.63423H15.0001V4H13.0001ZM13.0001 4H15.0001C15.0001 2.89543 14.1047 2 13.0001 2V4ZM11.0001 4H13.0001V2H11.0001V4ZM15.0938 5.71924C15.0511 5.69815 15.0232 5.67053 15.0094 5.65025C14.9972 5.63248 15.0001 5.62788 15.0001 5.63423H13.0001C13.0001 6.50299 13.5491 7.18731 14.2089 7.51283L15.0938 5.71924ZM16.0119 6.2197C16.0174 6.21655 16.0149 6.22132 15.9937 6.21972C15.9694 6.21789 15.9319 6.20762 15.8927 6.18131L14.7793 7.84277C15.3915 8.25303 16.2594 8.38623 17.0119 7.95175L16.0119 6.2197ZM18.9851 11.5385C18.9821 11.4913 18.992 11.4537 19.0025 11.4318C19.0118 11.4126 19.0172 11.4128 19.0118 11.4159L18.0118 9.68388C17.2604 10.1177 16.9415 10.9342 16.9894 11.6686L18.9851 11.5385ZM15.8927 17.8187C15.9319 17.7924 15.9694 17.7821 15.9937 17.7803C16.0149 17.7787 16.0174 17.7834 16.0119 17.7803L17.0119 16.0482C16.2594 15.6138 15.3915 15.747 14.7793 16.1572L15.8927 17.8187ZM19.0118 12.5841C19.0172 12.5872 19.0118 12.5874 19.0025 12.5682C18.992 12.5462 18.9821 12.5087 18.9851 12.4615L16.9894 12.3314C16.9415 13.0658 17.2604 13.8823 18.0118 14.3161L19.0118 12.5841ZM8.90647 18.2808C8.94923 18.3019 8.97711 18.3295 8.99094 18.3497C9.00306 18.3675 9.00015 18.3721 9.00015 18.3658H11.0001C11.0001 17.497 10.4512 16.8127 9.79137 16.4872L8.90647 18.2808ZM7.98838 17.7803C7.98292 17.7834 7.98539 17.7787 8.00661 17.7803C8.03085 17.7821 8.06836 17.7924 8.10763 17.8187L9.22098 16.1572C8.60875 15.747 7.74092 15.6138 6.98838 16.0482L7.98838 17.7803ZM15.0001 18.3658C15.0001 18.3721 14.9972 18.3675 15.0094 18.3497C15.0232 18.3295 15.0511 18.3019 15.0938 18.2808L14.2089 16.4872C13.5491 16.8127 13.0001 17.497 13.0001 18.3658H15.0001ZM5.01516 12.4615C5.01823 12.5086 5.00833 12.5462 4.99777 12.5682C4.98851 12.5874 4.9831 12.5872 4.98852 12.5841L5.98852 14.3161C6.73991 13.8823 7.05882 13.0658 7.01092 12.3314L5.01516 12.4615ZM4.98852 11.4159C4.9831 11.4128 4.98851 11.4126 4.99777 11.4318C5.00833 11.4537 5.01823 11.4913 5.01516 11.5385L7.01092 11.6686C7.05882 10.9342 6.73991 10.1177 5.98852 9.68388L4.98852 11.4159ZM8.10764 6.18131C8.06837 6.20763 8.03085 6.21789 8.00662 6.21972C7.9854 6.22133 7.98293 6.21655 7.98839 6.2197L6.98839 7.95176C7.74092 8.38623 8.60876 8.25303 9.22099 7.84277L8.10764 6.18131ZM9.00015 5.63424C9.00015 5.62788 9.00306 5.63248 8.99094 5.65025C8.97711 5.67053 8.94923 5.69815 8.90647 5.71924L9.79137 7.51283C10.4512 7.18731 11.0001 6.50299 11.0001 5.63424H9.00015Z"
                                                fill="#000000"></path>
                                            <circle cx="12" cy="12" r="3" stroke="#000000"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        </g>
                                    </svg> {{ Auth()->user()->jabatan }}</span>
                            </h6>
                            <br>
                            <table class="table table-hover responsive-small">
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ Auth()->user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>NIP</td>
                                        <td>:</td>
                                        <td>{{ Auth()->user()->nip }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jabatan</td>
                                        <td>:</td>
                                        <td>{{ Auth()->user()->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ Auth()->user()->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="align-items-center justify-content-center d-flex">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="btn btn-danger mx-2" type="submit"
                                        data-bss-hover-animate="tada">Keluar
                                        Akun <svg width="16px" height="16px" viewBox="0 0 1024 1024"
                                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill="#ffffff"
                                                    d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z">
                                                </path>
                                            </g>
                                        </svg></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
