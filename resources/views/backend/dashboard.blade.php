@extends('backend.app.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
                <h2 class="font-w600 mb-2 mr-auto ">Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6 m-t35">
                    <div class="card card-coin">
                        <div class="card-body text-center">
                            <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="40" r="40" fill="white" />
                                <path
                                    d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z"
                                    fill="#00ADA3" />
                                <path
                                    d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM40.0033 19.1441L49.272 35.6798L40.8133 30.973C40.3083 30.693 39.6966 30.693 39.1916 30.973L30.7329 35.6798L40.0033 19.1441ZM40.0033 60.8509L30.7329 44.3152L39.1916 49.022C39.4433 49.162 39.7233 49.232 40.0016 49.232C40.28 49.232 40.56 49.162 40.8117 49.022L49.2703 44.3152L40.0033 60.8509ZM40.0033 45.6569L29.8296 39.9967L40.0033 34.3364L50.1754 39.9967L40.0033 45.6569Z"
                                    fill="#00ADA3" />
                            </svg>
                            <h2 class="text-black mb-2 font-w600">{{ $countProject }}</h2>
                            <p class="mb-0 fs-14">
                                <svg width="29" height="22" viewBox="0 0 29 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d1)">
                                        <path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4"
                                            stroke="#2BC155" stroke-width="2" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001"
                                            height="22.0001" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="2" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <span class="text-success mr-1">Projects </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 m-t35">
                    <div class="card card-coin">
                        <div class="card-body text-center">
                            <svg class="mb-3 currency-icon ms-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                stroke-width="2.5" stroke="#CACBD2" fill="none"
                                class="duration-300 transform transition-all" style="width: 80px; height: 80px;">
                                <path
                                    d="M52.35 57.57h-40.7v-50a.1.1 0 01.16-.08l4.11 3.85a.12.12 0 00.13 0l3.3-3.89a.09.09 0 01.12 0l3.72 3.9a.11.11 0 00.13 0l3.29-3.89a.09.09 0 01.13 0l2.86 3.87a.11.11 0 00.14 0L33 7.46a.09.09 0 01.13 0l2.69 3.86a.1.1 0 00.14 0l2.88-3.86a.1.1 0 01.14 0l2.85 3.86a.1.1 0 00.14 0l2.73-3.84a.09.09 0 01.15 0l2.25 3.84a.11.11 0 00.13 0l5-3.87a.1.1 0 01.15.09z"
                                    stroke-linecap="round"></path>
                                <path
                                    d="M32.09 19.31l2.71 5.49a.08.08 0 00.07.05l6.06.88a.1.1 0 010 .17l-4.33 4.27a.16.16 0 000 .09l1 6a.11.11 0 01-.15.11l-5.41-2.85a.09.09 0 00-.1 0l-5.4 2.88a.11.11 0 01-.15-.11l1-6a.16.16 0 000-.09L23 25.9a.1.1 0 01.05-.17l6.06-.88a.08.08 0 00.07-.05l2.71-5.49a.1.1 0 01.2 0zM19.42 43.54h26.6M19.42 49.78h26.6"
                                    stroke-linecap="round"></path>
                            </svg>
                            <h2 class="text-black mb-2 font-w600">{{ $countCourse }}</h2>
                            <p class="mb-0 fs-13">
                                <svg width="29" height="22" viewBox="0 0 29 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d2)">
                                        <path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4"
                                            stroke="#2BC155" stroke-width="2" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d2" x="-3.05176e-05" y="-6.10352e-05" width="28.5001"
                                            height="22.0001" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="2" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape" />
                                        </filter>
                                    </defs>
                                </svg>

                                <span class="text-success mr-1">All Course</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 m-t35">
                    <div class="card card-coin">
                        <div class="card-body text-center">
                            <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="40" r="40" fill="white" />
                                <path
                                    d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z"
                                    fill="#374C98" />
                                <path
                                    d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM52.5455 56.9324H26.0111L29.2612 38.9483L25.4944 39.7317V36.6649L29.8279 35.7482L32.6447 20.2809H43.2284L40.8283 33.4481L44.5285 32.6647V35.7315L40.2616 36.6149L37.7949 50.2154H54.5122L52.5455 56.9324Z"
                                    fill="#374C98" />
                            </svg>
                            <h2 class="text-black mb-2 font-w600">{{ $countClient }}</h2>
                            <p class="mb-0 fs-14">
                                <svg width="29" height="22" viewBox="0 0 29 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d4)">
                                        <path d="M5 4C5.91797 5.08433 8.89728 8.27228 10.5 10L16.5 7L23.5 16"
                                            stroke="#FF2E2E" stroke-width="2" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d4" x="-3.05176e-05" y="0" width="28.5001"
                                            height="22.0001" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                            <feOffset dy="1" />
                                            <feGaussianBlur stdDeviation="2" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 1 0 0 0 0 0.180392 0 0 0 0 0.180392 0 0 0 0.61 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <span class="text-danger mr-1">Client Review</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
