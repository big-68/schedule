<header class="header">
    <?php
        $group_id = auth()->user()->group_id ?? NULL
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="logo">
                    <svg width="250" height="50" viewBox="0 0 300 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_13)">
                            <path d="M100.997 42.2907H95.3509V38.6344H100.997C101.87 38.6344 102.581 38.4886 103.128 38.1969C103.676 37.8948 104.077 37.4782 104.331 36.9469C104.584 36.4156 104.711 35.8167 104.711 35.15C104.711 34.4729 104.584 33.8427 104.331 33.2594C104.077 32.6761 103.676 32.2073 103.128 31.8531C102.581 31.499 101.87 31.3219 100.997 31.3219H96.9335V50.4H92.368V27.65H100.997C102.732 27.65 104.218 27.9729 105.457 28.6187C106.705 29.2542 107.658 30.1344 108.318 31.2594C108.977 32.3844 109.307 33.6708 109.307 35.1187C109.307 36.5875 108.977 37.8583 108.318 38.9313C107.658 40.0042 106.705 40.8323 105.457 41.4156C104.218 41.999 102.732 42.2907 100.997 42.2907ZM120.889 46.5875V39.0563C120.889 38.5146 120.803 38.0511 120.63 37.6656C120.457 37.2698 120.189 36.9625 119.823 36.7438C119.469 36.525 119.006 36.4156 118.438 36.4156C117.951 36.4156 117.531 36.5042 117.175 36.6813C116.82 36.8479 116.546 37.0927 116.353 37.4156C116.161 37.7282 116.064 38.0979 116.064 38.525H111.681C111.681 37.8063 111.844 37.1239 112.168 36.4782C112.493 35.8323 112.964 35.2646 113.584 34.7751C114.203 34.2751 114.938 33.8844 115.791 33.6031C116.652 33.3219 117.616 33.1813 118.682 33.1813C119.96 33.1813 121.097 33.4 122.091 33.8375C123.086 34.2751 123.866 34.9313 124.435 35.8063C125.013 36.6813 125.303 37.7751 125.303 39.0875V46.3219C125.303 47.249 125.358 48.0094 125.47 48.6031C125.582 49.1865 125.744 49.6969 125.957 50.1344V50.4H121.528C121.315 49.9417 121.152 49.3687 121.041 48.6813C120.94 47.9834 120.889 47.2855 120.889 46.5875ZM121.467 40.1031L121.498 42.65H119.047C118.469 42.65 117.967 42.7177 117.541 42.8531C117.115 42.9886 116.765 43.1813 116.49 43.4313C116.217 43.6708 116.013 43.9521 115.882 44.2751C115.76 44.5979 115.699 44.9521 115.699 45.3375C115.699 45.7229 115.785 46.0719 115.957 46.3844C116.13 46.6865 116.379 46.9261 116.704 47.1031C117.028 47.2698 117.408 47.3531 117.845 47.3531C118.505 47.3531 119.077 47.2177 119.564 46.9469C120.051 46.6761 120.427 46.3427 120.691 45.9469C120.965 45.5511 121.107 45.1761 121.117 44.8219L122.274 46.7282C122.112 47.1552 121.888 47.5979 121.604 48.0563C121.33 48.5146 120.98 48.9469 120.554 49.3531C120.128 49.749 119.616 50.0771 119.017 50.3375C118.418 50.5875 117.708 50.7125 116.886 50.7125C115.841 50.7125 114.892 50.499 114.041 50.0719C113.198 49.6344 112.528 49.0355 112.031 48.2751C111.544 47.5042 111.301 46.6292 111.301 45.65C111.301 44.7646 111.463 43.9782 111.788 43.2907C112.113 42.6031 112.59 42.025 113.218 41.5563C113.857 41.0771 114.654 40.7177 115.608 40.4782C116.561 40.2282 117.668 40.1031 118.925 40.1031H121.467ZM135.484 47.1969C136.022 47.1969 136.498 47.0927 136.915 46.8844C137.331 46.6656 137.656 46.3635 137.889 45.9782C138.132 45.5823 138.259 45.1187 138.269 44.5875H142.393C142.383 45.7751 142.074 46.8323 141.465 47.7594C140.857 48.6761 140.039 49.4 139.015 49.9313C137.99 50.4521 136.844 50.7125 135.575 50.7125C134.297 50.7125 133.181 50.4938 132.227 50.0563C131.283 49.6187 130.497 49.0146 129.868 48.2438C129.239 47.4625 128.767 46.5563 128.453 45.525C128.138 44.4834 127.981 43.3687 127.981 42.1813V41.7282C127.981 40.5303 128.138 39.4156 128.453 38.3844C128.767 37.3427 129.239 36.4365 129.868 35.6656C130.497 34.8844 131.283 34.2751 132.227 33.8375C133.17 33.4 134.277 33.1813 135.545 33.1813C136.894 33.1813 138.076 33.4469 139.091 33.9782C140.116 34.5094 140.917 35.2698 141.496 36.2594C142.084 37.2386 142.383 38.4 142.393 39.7438H138.269C138.259 39.1813 138.143 38.6708 137.919 38.2125C137.706 37.7542 137.391 37.3896 136.975 37.1187C136.569 36.8375 136.068 36.6969 135.469 36.6969C134.829 36.6969 134.307 36.8375 133.901 37.1187C133.495 37.3896 133.181 37.7646 132.958 38.2438C132.734 38.7125 132.577 39.249 132.485 39.8531C132.404 40.4469 132.364 41.0719 132.364 41.7282V42.1813C132.364 42.8375 132.404 43.4677 132.485 44.0719C132.567 44.6761 132.719 45.2125 132.942 45.6813C133.176 46.15 133.495 46.5198 133.901 46.7907C134.307 47.0615 134.835 47.1969 135.484 47.1969ZM156.015 33.4938V37.025H148.039V33.4938H156.015ZM149.303 33.4938V50.4H144.919V33.4938H149.303ZM159.21 33.4938V50.4H154.812V33.4938H159.21ZM166.957 44.1187L172.482 33.4938H176.865V50.4H172.482V39.7594L166.957 50.4H162.574V33.4938H166.957V44.1187ZM187.046 47.1969C187.584 47.1969 188.061 47.0927 188.477 46.8844C188.893 46.6656 189.217 46.3635 189.451 45.9782C189.694 45.5823 189.821 45.1187 189.831 44.5875H193.956C193.946 45.7751 193.636 46.8323 193.028 47.7594C192.419 48.6761 191.602 49.4 190.577 49.9313C189.552 50.4521 188.406 50.7125 187.138 50.7125C185.86 50.7125 184.743 50.4938 183.789 50.0563C182.846 49.6187 182.059 49.0146 181.431 48.2438C180.802 47.4625 180.33 46.5563 180.016 45.525C179.701 44.4834 179.543 43.3687 179.543 42.1813V41.7282C179.543 40.5303 179.701 39.4156 180.016 38.3844C180.33 37.3427 180.802 36.4365 181.431 35.6656C182.059 34.8844 182.846 34.2751 183.789 33.8375C184.733 33.4 185.839 33.1813 187.107 33.1813C188.457 33.1813 189.639 33.4469 190.653 33.9782C191.678 34.5094 192.48 35.2698 193.058 36.2594C193.646 37.2386 193.946 38.4 193.956 39.7438H189.831C189.821 39.1813 189.704 38.6708 189.482 38.2125C189.269 37.7542 188.954 37.3896 188.538 37.1187C188.132 36.8375 187.63 36.6969 187.031 36.6969C186.392 36.6969 185.87 36.8375 185.464 37.1187C185.058 37.3896 184.743 37.7646 184.52 38.2438C184.297 38.7125 184.139 39.249 184.048 39.8531C183.967 40.4469 183.926 41.0719 183.926 41.7282V42.1813C183.926 42.8375 183.967 43.4677 184.048 44.0719C184.129 44.6761 184.282 45.2125 184.505 45.6813C184.738 46.15 185.058 46.5198 185.464 46.7907C185.87 47.0615 186.397 47.1969 187.046 47.1969ZM205.385 46.5875V39.0563C205.385 38.5146 205.299 38.0511 205.127 37.6656C204.955 37.2698 204.686 36.9625 204.32 36.7438C203.965 36.525 203.504 36.4156 202.936 36.4156C202.449 36.4156 202.027 36.5042 201.672 36.6813C201.317 36.8479 201.043 37.0927 200.85 37.4156C200.657 37.7282 200.561 38.0979 200.561 38.525H196.178C196.178 37.8063 196.34 37.1239 196.665 36.4782C196.989 35.8323 197.462 35.2646 198.08 34.7751C198.699 34.2751 199.435 33.8844 200.287 33.6031C201.15 33.3219 202.114 33.1813 203.179 33.1813C204.457 33.1813 205.594 33.4 206.588 33.8375C207.582 34.2751 208.364 34.9313 208.932 35.8063C209.51 36.6813 209.799 37.7751 209.799 39.0875V46.3219C209.799 47.249 209.855 48.0094 209.966 48.6031C210.078 49.1865 210.241 49.6969 210.453 50.1344V50.4H206.024C205.812 49.9417 205.65 49.3687 205.537 48.6813C205.436 47.9834 205.385 47.2855 205.385 46.5875ZM205.964 40.1031L205.994 42.65H203.544C202.966 42.65 202.463 42.7177 202.037 42.8531C201.611 42.9886 201.261 43.1813 200.988 43.4313C200.713 43.6708 200.511 43.9521 200.378 44.2751C200.257 44.5979 200.196 44.9521 200.196 45.3375C200.196 45.7229 200.282 46.0719 200.455 46.3844C200.627 46.6865 200.875 46.9261 201.2 47.1031C201.525 47.2698 201.905 47.3531 202.342 47.3531C203.001 47.3531 203.575 47.2177 204.062 46.9469C204.549 46.6761 204.924 46.3427 205.188 45.9469C205.462 45.5511 205.604 45.1761 205.614 44.8219L206.77 46.7282C206.608 47.1552 206.385 47.5979 206.101 48.0563C205.827 48.5146 205.477 48.9469 205.05 49.3531C204.625 49.749 204.112 50.0771 203.514 50.3375C202.915 50.5875 202.205 50.7125 201.383 50.7125C200.338 50.7125 199.389 50.499 198.537 50.0719C197.695 49.6344 197.025 49.0355 196.528 48.2751C196.041 47.5042 195.797 46.6292 195.797 45.65C195.797 44.7646 195.96 43.9782 196.284 43.2907C196.609 42.6031 197.086 42.025 197.715 41.5563C198.355 41.0771 199.151 40.7177 200.105 40.4782C201.058 40.2282 202.164 40.1031 203.423 40.1031H205.964ZM224.455 40.3219V43.8219H216.085V40.3219H224.455ZM217.546 33.4938V50.4H213.163V33.4938H217.546ZM227.423 33.4938V50.4H223.025V33.4938H227.423ZM235.2 44.1187L240.725 33.4938H245.108V50.4H240.725V39.7594L235.2 50.4H230.817V33.4938H235.2V44.1187ZM256.065 50.7125C254.787 50.7125 253.64 50.5042 252.626 50.0875C251.611 49.6604 250.749 49.0719 250.039 48.3219C249.338 47.5719 248.801 46.7021 248.425 45.7125C248.05 44.7125 247.862 43.65 247.862 42.525V41.9C247.862 40.6187 248.04 39.4469 248.395 38.3844C248.75 37.3219 249.257 36.4 249.917 35.6187C250.586 34.8375 251.398 34.2386 252.352 33.8219C253.306 33.3948 254.381 33.1813 255.578 33.1813C256.745 33.1813 257.78 33.3792 258.683 33.7751C259.586 34.1708 260.342 34.7334 260.951 35.4625C261.57 36.1917 262.036 37.0667 262.351 38.0875C262.665 39.0979 262.823 40.2229 262.823 41.4625V43.3375H249.734V40.3375H258.516V39.9938C258.516 39.3687 258.404 38.8115 258.181 38.3219C257.968 37.8219 257.643 37.4261 257.207 37.1344C256.77 36.8427 256.212 36.6969 255.533 36.6969C254.954 36.6969 254.457 36.8271 254.042 37.0875C253.625 37.3479 253.285 37.7125 253.022 38.1813C252.768 38.65 252.575 39.2021 252.443 39.8375C252.321 40.4625 252.26 41.15 252.26 41.9V42.525C252.26 43.2021 252.352 43.8271 252.535 44.4C252.727 44.9729 252.996 45.4677 253.341 45.8844C253.696 46.3011 254.123 46.6239 254.62 46.8531C255.127 47.0823 255.7 47.1969 256.339 47.1969C257.13 47.1969 257.866 47.0407 258.546 46.7282C259.236 46.4052 259.83 45.9208 260.327 45.2751L262.457 47.65C262.113 48.1604 261.641 48.65 261.042 49.1187C260.454 49.5875 259.743 49.9729 258.912 50.2751C258.079 50.5667 257.13 50.7125 256.065 50.7125ZM265.532 48.2282C265.532 47.5615 265.755 47.0042 266.201 46.5563C266.658 46.1083 267.262 45.8844 268.012 45.8844C268.763 45.8844 269.362 46.1083 269.808 46.5563C270.265 47.0042 270.493 47.5615 270.493 48.2282C270.493 48.8948 270.265 49.4521 269.808 49.9C269.362 50.3479 268.763 50.5719 268.012 50.5719C267.262 50.5719 266.658 50.3479 266.201 49.9C265.755 49.4521 265.532 48.8948 265.532 48.2282ZM278.742 37.1813V50.4H274.359V33.4938H278.483L278.742 37.1813ZM283.703 33.3844L283.627 37.5563C283.414 37.525 283.156 37.499 282.851 37.4782C282.557 37.4469 282.288 37.4313 282.044 37.4313C281.426 37.4313 280.888 37.5146 280.431 37.6813C279.985 37.8375 279.609 38.0719 279.305 38.3844C279.011 38.6969 278.787 39.0771 278.635 39.525C278.493 39.9729 278.412 40.4834 278.392 41.0563L277.509 40.7751C277.509 39.6813 277.615 38.6761 277.829 37.7594C278.042 36.8323 278.351 36.025 278.757 35.3375C279.173 34.65 279.68 34.1187 280.279 33.7438C280.878 33.3687 281.563 33.1813 282.334 33.1813C282.577 33.1813 282.826 33.2021 283.079 33.2438C283.333 33.2751 283.541 33.3219 283.703 33.3844ZM295.513 46.3531V33.4938H299.896V50.4H295.772L295.513 46.3531ZM296 42.8844L297.294 42.8531C297.294 43.9782 297.168 45.025 296.914 45.9938C296.66 46.9521 296.279 47.7855 295.772 48.4938C295.265 49.1917 294.626 49.7386 293.854 50.1344C293.084 50.5198 292.175 50.7125 291.13 50.7125C290.329 50.7125 289.588 50.5979 288.909 50.3687C288.238 50.1292 287.66 49.7594 287.173 49.2594C286.696 48.749 286.321 48.0979 286.047 47.3063C285.783 46.5042 285.651 45.5407 285.651 44.4156V33.4938H290.035V44.4469C290.035 44.9469 290.091 45.3687 290.202 45.7125C290.324 46.0563 290.491 46.3375 290.704 46.5563C290.917 46.7751 291.166 46.9313 291.45 47.025C291.744 47.1187 292.069 47.1656 292.424 47.1656C293.327 47.1656 294.037 46.9782 294.555 46.6031C295.082 46.2282 295.452 45.7177 295.666 45.0719C295.889 44.4156 296 43.6865 296 42.8844Z" fill="currentColor"/>
                            <path d="M62.3377 0H15.5844C6.97738 0 0 7.16344 0 16V64C0 72.8366 6.97738 80 15.5844 80H62.3377C70.9447 80 77.9221 72.8366 77.9221 64V16C77.9221 7.16344 70.9447 0 62.3377 0Z" fill="currentColor"/>
                            <path d="M74.026 40C74.026 20.1178 58.3269 4 38.9611 4C19.5952 4 3.89612 20.1178 3.89612 40C3.89612 59.8823 19.5952 76 38.9611 76C58.3269 76 74.026 59.8823 74.026 40Z" fill="white"/>
                            <path d="M58.0601 45.3581L58.0341 40.7642L62.3377 38.2918L38.8968 25.6L15.5844 38.5457L24.931 44.0551L24.9496 47.3289L24.9515 47.5903L25.0369 47.5483C24.9384 47.6856 24.8753 47.8267 24.8772 47.9679C24.8846 49.578 31.2153 50.8523 39.0291 50.8085C46.8389 50.7665 53.1604 49.4179 53.1549 47.8115C53.1549 47.6703 53.0824 47.5331 52.9858 47.3919L53.0712 47.4339V47.1725L53.0544 43.8854L57.1071 41.2967L57.1293 45.3639C56.6834 45.5604 56.3732 46.0106 56.3768 46.5373C56.3806 47.2279 56.9268 47.7867 57.6051 47.781C58.287 47.7771 58.8277 47.2125 58.8239 46.5237C58.8202 45.9972 58.508 45.5508 58.0601 45.3581ZM39.0233 49.7001C32.0906 49.7401 26.4677 48.9579 26.4622 47.9603C26.4566 46.9625 32.0719 46.125 39.0049 46.0887C45.9395 46.0487 51.5605 46.827 51.5643 47.8229C51.5696 48.8169 45.958 49.662 39.0233 49.7001ZM52.7347 41.2184C51.7964 40.2053 48.433 37.5307 38.9602 37.5861C29.4742 37.6377 26.1537 40.3448 25.2266 41.373L25.221 40.404C25.221 40.404 27.9116 36.2012 38.9529 36.1421C49.9886 36.0809 52.7294 40.2513 52.7294 40.2513L52.7347 41.2184ZM56.6183 48.0556L56.1408 55.1695C57.618 52.7867 58.8519 53.6737 58.8519 53.6737L58.8222 48.0441C57.2351 48.6833 56.6183 48.0556 56.6183 48.0556Z" fill="currentColor"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_13">
                                <rect width="300" height="80" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (!auth()->guest())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('schedule') }}">Расписание</a>
                        </li>
                    @endif
                    @if ($group_id === 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                Пользователи
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                Предметы
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('class') }}">
                                Классы
                            </a>
                        </li>
                    @endif
                </ul>
                @if (auth()->guest())
                <div class="d-flex">
                    <a href="{{ route('login') }}">
                        <button class="btn btn-outline-success" type="submit">Войти</button>
                    </a>
                </div>
                @else
                <div class="d-flex ">
                    <div class="dropdown" style="float:left;">
                        <button class="dropbtn">
                            <div class="avatar me-3">
                                <img src="{{ auth()->user()->avatar }}" alt="">
                            </div>
                            {{ auth()->user()->email }}
                        </button>
                        <div class="dropdown-content">
                            <a class=" text-center" href="{{ route('profile') }}">Личный кабинет</a>
                            <a class=" text-center" href="#">Поддержка</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn w-100" type="submit">Выход</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>
</header>