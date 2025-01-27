<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                @if(auth()->user()->avatar)
                <img src="{{asset('/uploads/' .auth()->user()->avatar)}}" alt="Admin"
                    class="rounded-circle p-1 bg-primary"  style="height: 100px; width: 100px">
                @else
                    <img src="{{asset('backend/assets/images/avatars/avatar-2.png')}}" alt="Admin"
                    class="rounded-circle p-1 bg-primary" width="110">
                @endif

                <div class="mt-3">
                    <h4>{{auth()->user()->name}}</h4>
                    <p class="text-secondary mb-1">{{auth()->user()->email}}</p>
                    <p class="text-muted font-size-sm">{{auth()->user()->address}}</p>
                    <button class="btn btn-primary">View Website</button>
                    <button class="btn btn-outline-primary">Message</button>
                </div>
            </div>
            <hr class="my-4" />

            @php

            use App\Models\SocialSetting;

        $facebook = SocialSetting::where('key', 'facebook')->first();
        $twitter = SocialSetting::where('key', 'twitter')->first();
        $youtube = SocialSetting::where('key', 'youtube')->first();
        $linkedin = SocialSetting::where('key', 'linkedin')->first();
        $pinterest = SocialSetting::where('key', 'pinterest')->first();
        $instagram = SocialSetting::where('key', 'instagram')->first();

            @endphp


            <ul class="list-group list-group-flush">


                <li
                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-twitter me-2 icon-inline text-info">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                            </path>
                        </svg>Twitter</h6>
                    <span class="text-secondary">{{$twitter->value}}</span>
                </li>
                <li
                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-instagram me-2 icon-inline text-danger">
                            <rect x="2" y="2" width="20" height="20"
                                rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
                            </path>
                            <line x1="17.5" y1="6.5" x2="17.51"
                                y2="6.5"></line>
                        </svg>Instagram</h6>
                    <span class="text-secondary">{{$instagram->value}}</span>
                </li>
                <li
                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-facebook me-2 icon-inline text-primary">
                            <path
                                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                            </path>
                        </svg>Facebook</h6>
                    <span class="text-secondary">{{$facebook->value}}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
