<div class="text-primary-content ">
    <div class="bg-white navbar text-primary-content">
        <div class="flex-1 ">
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200">
        </div>
        <div>Logged in as: </div>
        <div class="flex-none gap-2 ml-4">
            <div class="dropdown dropdown-hover dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                    <span class="text-xs">{{ $userId }}</span>
                </div>
                <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow rounded-box w-52 mt-4 bg-white">
                  <li><a href="superAdmin">Go to Super Admin</a></li>
                  <li><a href="moduleAdmin">Go to Module Admin</a></li>
                  <li><a>Settings</a></li>
                </ul>
              </div>
        </div>
      </div>

      <div class="bottom-0 h-full drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content" style="height: 100vh;">
            <div id="page-content" style="height: 100vh;">
                <img src="{{ asset('img/plm_bg.jpg') }}" style="width: 100%; height:100vh">
            </div>
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" class="drawer-overlay" aria-label="close sidebar"></label>
            <ul class="p-4 menu w-80 text-base-content" style="background-color: #2D349A; color:white">
                <li>
                    <label class="cursor-pointer">
                        <b>Financial System</b>
                    </label>
                    <ul>
                        @foreach($financeAccess as $module => $access)
                            @if($access == "1")
                                <li>
                                    <a href="#" onclick="changePageContent('{{ $module }}')">
                                        {{ $module }}
                                    </a>
                                </li>
                            @else
                                <li style="color: gray;">
                                    <span>{{ $module }}</span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>Registrar Module</b>
                    </label>
                    <ul>
                        @foreach($registrarAccess as $module => $access)
                            @if($access == "1")
                                <li>
                                    <a href="#" onclick="changePageContent('{{ $module }}')">
                                        {{ $module }}
                                    </a>
                                </li>
                            @else
                                <li style="color: gray;"><span>{{ $module }}</span></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>Different Portals</b>
                    </label>
                    <ul>
                        @foreach($differentAccess as $module => $access)
                            @if($access == "1")
                                <li>
                                    <a href="#" onclick="changePageContent('{{ $module }}')">
                                        {{ $module }}
                                    </a>
                                </li>
                            @else
                                <li style="color: gray;"><span>{{ $module }}</span></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>HR Process Automation</b>
                    </label>
                    <ul>
                        @foreach($hrAccess as $module => $access)
                            @if($access == "1")
                                <li>
                                    <a href="#" onclick="changePageContent('{{ $module }}')">
                                        {{ $module }}
                                    </a>
                                </li>
                            @else
                                <li style="color: gray;"><span>{{ $module }}</span></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>Academic Management</b>
                    </label>
                    <ul>
                        @foreach($acadAccess as $module => $access)
                            @if($access == "1")
                                <li>
                                    <a href="#" onclick="changePageContent('{{ $module }}')">
                                        {{ $module }}
                                    </a>
                                </li>
                            @else
                                <li style="color: gray;"><span>{{ $module }}</span></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    {{-- <script>
        function changePageContent(moduleName) {
            if (moduleName == "Accounts Payable") {
                const iframeUrl = 'http://127.0.0.1:8001/dashboard'; 

                const iframe = document.createElement('iframe');
                iframe.src = iframeUrl;
                iframe.width = '100%';
                iframe.height = '100%';
                iframe.frameBorder = '0';
                iframe.allow = 'fullscreen'; 

                const pageContent = document.getElementById('page-content');
                pageContent.innerHTML = ''; 
                pageContent.appendChild(iframe);
            } else if (moduleName == "Recruitment/Selection/Placement/Personnel Records") {
                const iframeUrl = 'http://127.0.0.1:8002'; 

                const iframe = document.createElement('iframe');
                iframe.src = iframeUrl;
                iframe.width = '100%';
                iframe.height = '100%';
                iframe.frameBorder = '0';
                iframe.allow = 'fullscreen'; 

                const pageContent = document.getElementById('page-content');
                pageContent.innerHTML = ''; 
                pageContent.appendChild(iframe);
            } else if (moduleName == "Learning and Development/Employee Self Services/Others") {
                const iframeUrl = 'http://127.0.0.1:8003'; 

                const iframe = document.createElement('iframe');
                iframe.src = iframeUrl;
                iframe.width = '100%';
                iframe.height = '100%';
                iframe.frameBorder = '0';
                iframe.allow = 'fullscreen'; 

                const pageContent = document.getElementById('page-content');
                pageContent.innerHTML = ''; 
                pageContent.appendChild(iframe);
            } else if (moduleName == "Academic Admission and Testing Support") {
                const iframeUrl = 'http://127.0.0.1:8004/admission/dashboard'; 

                const iframe = document.createElement('iframe');
                iframe.src = iframeUrl;
                iframe.width = '100%';
                iframe.height = '100%';
                iframe.frameBorder = '0';
                iframe.allow = 'fullscreen'; 

                const pageContent = document.getElementById('page-content');
                pageContent.innerHTML = ''; 
                pageContent.appendChild(iframe);
            } else {
                document.getElementById('page-content').innerHTML = `<img src="{{ asset('img/plm_bg.jpg') }}" alt="Fallback Image" style="width: 100%; height:100vh">`;
            }
        }
    </script> --}}

      </div>

      <script src="/livewire/livewire.js?id={{ now()->timestamp }}"></script>
</div>
