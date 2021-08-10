            <div class="row logo mt-4 mb-3">
                <div class=" col-md-4 col-xs-12p-0 p-0">
                    <div class="d-flex flex-row justify-content-start align-items-center logoheight">
                        <div class="logo-time"><p>{{ $date->isoFormat('dddd, D [de] MMMM [de] YYYY. h:mm a')}}</p></div>
                    </div>
                </div>
                <div class=" col-md-4 col-xs-12 p-0">
                    <div class="d-flex flex-row justify-content-center align-items-center logoheight">
                        <div>
                            <a href="{{ route('blog') }}"><img src="{{ asset('assetsWeb/images/logo.svg') }}" class="img-fluid" alt="Logo CMS BLOG"></a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-xs-12 p-0">
                    <div class="d-flex flex-row justify-content-end align-items-center logoheight">
                        <div>
                            <button class="switch" id="switch">
                                <span><img class="iconSizeSwitch" src="{{ asset('assetsWeb/images/svg/icons/sol.svg') }}"  alt="Sol"></span>
                                <span><img class="iconSizeSwitch" src="{{ asset('assetsWeb/images/svg/icons/luna.svg') }}"  alt="luna"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>