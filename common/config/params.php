<?php
$real_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR;
$relative_path = '../common/';
return [
        'system_name'                   => 'Travel Website',
        'adminEmail'                    => 'info@gateway-scandinavia.com',
        'supportEmail'                  => 'support@example.com',
        'user.passwordResetTokenExpire' => 3600,
        'upload_path'                   => [
                'image' => $real_path . 'images\uploads' . DIRECTORY_SEPARATOR,
                'temp'  => $real_path . 'temp' . DIRECTORY_SEPARATOR,
        ],
        'image_path'                    => [
                'image'    => $relative_path . 'images/',
                'uploads'  => $relative_path . 'images/uploads/',
                'no-image' => $relative_path . 'images/no-image.png',
        ],

        'user-session'  => 'GHjJfdAuaYIuSDe',
        'role_user'     => [
                'UBhcWtaIva' => 'admin',
                'QrWjSeWasD' => 'operator',
        ],
        'user_role'     => [
                'admin'    => 'UBhcWtaIva',
                'operator' => 'QrWjSeWasD',
        ],
        'document_type' => ['doc', 'docx', 'pdf', 'xls'],
        'image_ext'     => ['jpg', 'png', 'jpeg', 'gif'],
        'image_size'    => 2000000,
        'crop_size'     => [
                'width'  => 250,
                'height' => 250,
        ],

        'allowed_incorrect_login' => 15,
        'email'                   => [
                'Host'            => 'secure243.servconfig.com',
                'Port'            => '465',
                'SMTPSecure'      => 'tls',
                'SMTPAuth'        => true,
                'SMTPKeepAlive'   => true,
                'SMTPDebug'       => 0,
                'Mailer'          => 'mail',
                'CharSet'         => 'utf-8',
                'ContentType'     => 'text/html',
                'From'            => 'website@gateway-scandinavia.com',
                'FromName'        => "Gateway Scandinavia | Auto-generated Email",
                'Username'        => 'website@gateway-scandinavia.com',
                'Password'        => 'SOEhI7msgieT',
                'AltBody'         => 'To view the message, please use an HTML compatible email viewer!!',
                'Signature'       => '',
                'from-email'      => 'website@gateway-scandinavia.com',
                'from-email-name' => 'Gateway Scandinavia | Auto-generated Email',
                'system-email'    => 'info.gateway-scandinavia.com',
        ],

        'fa-icons'                   => ["fa-adjust", "fa-adn", "fa-align-center", "fa-align-justify", "fa-align-left", "fa-align-right", "fa-ambulance", "fa-anchor", "fa-android", "fa-angellist", "fa-angle-double-down", "fa-angle-double-left", "fa-angle-double-right", "fa-angle-double-up", "fa-angle-down", "fa-angle-left", "fa-angle-right", "fa-angle-up", "fa-apple", "fa-archive", "fa-area-chart", "fa-arrow-circle-down", "fa-arrow-circle-left", "fa-arrow-circle-o-down", "fa-arrow-circle-o-left", "fa-arrow-circle-o-right", "fa-arrow-circle-o-up", "fa-arrow-circle-right", "fa-arrow-circle-up", "fa-arrow-down", "fa-arrow-left", "fa-arrow-right", "fa-arrow-up", "fa-arrows", "fa-arrows-alt", "fa-arrows-h", "fa-arrows-v", "fa-asterisk", "fa-at", "fa-automobile", "fa-backward", "fa-ban", "fa-bank", "fa-bar-chart", "fa-bar-chart-o", "fa-barcode", "fa-bars", "fa-bed", "fa-beer", "fa-behance", "fa-behance-square", "fa-bell", "fa-bell-o", "fa-bell-slash", "fa-bell-slash-o", "fa-bicycle", "fa-binoculars", "fa-birthday-cake", "fa-bitbucket", "fa-bitbucket-square", "fa-bitcoin", "fa-bold", "fa-bolt", "fa-bomb", "fa-book", "fa-bookmark", "fa-bookmark-o", "fa-briefcase", "fa-btc", "fa-bug", "fa-building", "fa-building-o", "fa-bullhorn", "fa-bullseye", "fa-bus", "fa-buysellads", "fa-cab", "fa-calculator", "fa-calendar", "fa-calendar-o", "fa-camera", "fa-camera-retro", "fa-car", "fa-caret-down", "fa-caret-left", "fa-caret-right", "fa-caret-square-o-down", "fa-caret-square-o-left", "fa-caret-square-o-right", "fa-caret-square-o-up", "fa-caret-up", "fa-cart-arrow-down", "fa-cart-plus", "fa-cc", "fa-cc-amex", "fa-cc-discover", "fa-cc-mastercard", "fa-cc-paypal", "fa-cc-stripe", "fa-cc-visa", "fa-certificate", "fa-chain", "fa-chain-broken", "fa-check", "fa-check-circle", "fa-check-circle-o", "fa-check-square", "fa-check-square-o", "fa-chevron-circle-down", "fa-chevron-circle-left", "fa-chevron-circle-right", "fa-chevron-circle-up", "fa-chevron-down", "fa-chevron-left", "fa-chevron-right", "fa-chevron-up", "fa-child", "fa-circle", "fa-circle-o", "fa-circle-o-notch", "fa-circle-thin", "fa-clipboard", "fa-clock-o", "fa-close", "fa-cloud", "fa-cloud-download", "fa-cloud-upload", "fa-cny", "fa-code", "fa-code-fork", "fa-codepen", "fa-coffee", "fa-cog", "fa-cogs", "fa-columns", "fa-comment", "fa-comment-o", "fa-comments", "fa-comments-o", "fa-compass", "fa-compress", "fa-connectdevelop", "fa-copy", "fa-copyright", "fa-credit-card", "fa-crop", "fa-crosshairs", "fa-css3", "fa-cube", "fa-cubes", "fa-cut", "fa-cutlery", "fa-dashboard", "fa-dashcube", "fa-database", "fa-dedent", "fa-delicious", "fa-desktop", "fa-deviantart", "fa-diamond", "fa-digg", "fa-dollar", "fa-dot-circle-o", "fa-download", "fa-dribbble", "fa-dropbox", "fa-drupal", "fa-edit", "fa-eject", "fa-ellipsis-h", "fa-ellipsis-v", "fa-empire", "fa-envelope", "fa-envelope-o", "fa-envelope-square", "fa-eraser", "fa-eur", "fa-euro", "fa-exchange", "fa-exclamation", "fa-exclamation-circle", "fa-exclamation-triangle", "fa-expand", "fa-external-link", "fa-external-link-square", "fa-eye", "fa-eye-slash", "fa-eyedropper", "fa-facebook", "fa-facebook-f", "fa-facebook-official", "fa-facebook-square", "fa-fast-backward", "fa-fast-forward", "fa-fax", "fa-female", "fa-fighter-jet", "fa-file", "fa-file-archive-o", "fa-file-audio-o", "fa-file-code-o", "fa-file-excel-o", "fa-file-image-o", "fa-file-movie-o", "fa-file-o", "fa-file-pdf-o", "fa-file-photo-o", "fa-file-picture-o", "fa-file-powerpoint-o", "fa-file-sound-o", "fa-file-text", "fa-file-text-o", "fa-file-video-o", "fa-file-word-o", "fa-file-zip-o", "fa-files-o", "fa-film", "fa-filter", "fa-fire", "fa-fire-extinguisher", "fa-flag", "fa-flag-checkered", "fa-flag-o", "fa-flash", "fa-flask", "fa-flickr", "fa-floppy-o", "fa-folder", "fa-folder-o", "fa-folder-open", "fa-folder-open-o", "fa-font", "fa-forumbee", "fa-forward", "fa-foursquare", "fa-frown-o", "fa-futbol-o", "fa-gamepad", "fa-gavel", "fa-gbp", "fa-ge", "fa-gear", "fa-gears", "fa-genderless", "fa-gift", "fa-git", "fa-git-square", "fa-github", "fa-github-alt", "fa-github-square", "fa-gittip", "fa-glass", "fa-globe", "fa-google", "fa-google-plus", "fa-google-plus-square", "fa-google-wallet", "fa-graduation-cap", "fa-gratipay", "fa-group", "fa-h-square", "fa-hacker-news", "fa-hand-o-down", "fa-hand-o-left", "fa-hand-o-right", "fa-hand-o-up", "fa-hdd-o", "fa-header", "fa-headphones", "fa-heart", "fa-heart-o", "fa-heartbeat", "fa-history", "fa-home", "fa-hospital-o", "fa-hotel", "fa-html5", "fa-ils", "fa-image", "fa-inbox", "fa-indent", "fa-info", "fa-info-circle", "fa-inr", "fa-instagram", "fa-institution", "fa-ioxhost", "fa-italic", "fa-joomla", "fa-jpy", "fa-jsfiddle", "fa-key", "fa-keyboard-o", "fa-krw", "fa-language", "fa-laptop", "fa-lastfm", "fa-lastfm-square", "fa-leaf", "fa-leanpub", "fa-legal", "fa-lemon-o", "fa-level-down", "fa-level-up", "fa-life-bouy", "fa-life-buoy", "fa-life-ring", "fa-life-saver", "fa-lightbulb-o", "fa-line-chart", "fa-link", "fa-linkedin", "fa-linkedin-square", "fa-linux", "fa-list", "fa-list-alt", "fa-list-ol", "fa-list-ul", "fa-location-arrow", "fa-lock", "fa-long-arrow-down", "fa-long-arrow-left", "fa-long-arrow-right", "fa-long-arrow-up", "fa-magic", "fa-magnet", "fa-mail-forward", "fa-mail-reply", "fa-mail-reply-all", "fa-male", "fa-map-marker", "fa-mars", "fa-mars-double", "fa-mars-stroke", "fa-mars-stroke-h", "fa-mars-stroke-v", "fa-maxcdn", "fa-meanpath", "fa-medium", "fa-medkit", "fa-meh-o", "fa-mercury", "fa-microphone", "fa-microphone-slash", "fa-minus", "fa-minus-circle", "fa-minus-square", "fa-minus-square-o", "fa-mobile", "fa-mobile-phone", "fa-money", "fa-moon-o", "fa-mortar-board", "fa-motorcycle", "fa-music", "fa-navicon", "fa-neuter", "fa-newspaper-o", "fa-openid", "fa-outdent", "fa-pagelines", "fa-paint-brush", "fa-paper-plane", "fa-paper-plane-o", "fa-paperclip", "fa-paragraph", "fa-paste", "fa-pause", "fa-paw", "fa-paypal", "fa-pencil", "fa-pencil-square", "fa-pencil-square-o", "fa-phone", "fa-phone-square", "fa-photo", "fa-picture-o", "fa-pie-chart", "fa-pied-piper", "fa-pied-piper-alt", "fa-pinterest", "fa-pinterest-p", "fa-pinterest-square", "fa-plane", "fa-play", "fa-play-circle", "fa-play-circle-o", "fa-plug", "fa-plus", "fa-plus-circle", "fa-plus-square", "fa-plus-square-o", "fa-power-off", "fa-print", "fa-puzzle-piece", "fa-qq", "fa-qrcode", "fa-question", "fa-question-circle", "fa-quote-left", "fa-quote-right", "fa-ra", "fa-random", "fa-rebel", "fa-recycle", "fa-reddit", "fa-reddit-square", "fa-refresh", "fa-remove", "fa-renren", "fa-reorder", "fa-repeat", "fa-reply", "fa-reply-all", "fa-retweet", "fa-rmb", "fa-road", "fa-rocket", "fa-rotate-left", "fa-rotate-right", "fa-rouble", "fa-rss", "fa-rss-square", "fa-rub", "fa-ruble", "fa-rupee", "fa-save", "fa-scissors", "fa-search", "fa-search-minus", "fa-search-plus", "fa-sellsy", "fa-send", "fa-send-o", "fa-server", "fa-share", "fa-share-alt", "fa-share-alt-square", "fa-share-square", "fa-share-square-o", "fa-shekel", "fa-sheqel", "fa-shield", "fa-ship", "fa-shirtsinbulk", "fa-shopping-cart", "fa-sign-in", "fa-sign-out", "fa-signal", "fa-simplybuilt", "fa-sitemap", "fa-skyatlas", "fa-skype", "fa-slack", "fa-sliders", "fa-slideshare", "fa-smile-o", "fa-soccer-ball-o", "fa-sort", "fa-sort-alpha-asc", "fa-sort-alpha-desc", "fa-sort-amount-asc", "fa-sort-amount-desc", "fa-sort-asc", "fa-sort-desc", "fa-sort-down", "fa-sort-numeric-asc", "fa-sort-numeric-desc", "fa-sort-up", "fa-soundcloud", "fa-space-shuttle", "fa-spinner", "fa-spoon", "fa-spotify", "fa-square", "fa-square-o", "fa-stack-exchange", "fa-stack-overflow", "fa-star", "fa-star-half", "fa-star-half-empty", "fa-star-half-full", "fa-star-half-o", "fa-star-o", "fa-steam", "fa-steam-square", "fa-step-backward", "fa-step-forward", "fa-stethoscope", "fa-stop", "fa-street-view", "fa-strikethrough", "fa-stumbleupon", "fa-stumbleupon-circle", "fa-subscript", "fa-subway", "fa-suitcase", "fa-sun-o", "fa-superscript", "fa-support", "fa-table", "fa-tablet", "fa-tachometer", "fa-tag", "fa-tags", "fa-tasks", "fa-taxi", "fa-tencent-weibo", "fa-terminal", "fa-text-height", "fa-text-width", "fa-th", "fa-th-large", "fa-th-list", "fa-thumb-tack", "fa-thumbs-down", "fa-thumbs-o-down", "fa-thumbs-o-up", "fa-thumbs-up", "fa-ticket", "fa-times", "fa-times-circle", "fa-times-circle-o", "fa-tint", "fa-toggle-down", "fa-toggle-left", "fa-toggle-off", "fa-toggle-on", "fa-toggle-right", "fa-toggle-up", "fa-train", "fa-transgender", "fa-transgender-alt", "fa-trash", "fa-trash-o", "fa-tree", "fa-trello", "fa-trophy", "fa-truck", "fa-try", "fa-tty", "fa-tumblr", "fa-tumblr-square", "fa-turkish-lira", "fa-twitch", "fa-twitter", "fa-twitter-square", "fa-umbrella", "fa-underline", "fa-undo", "fa-university", "fa-unlink", "fa-unlock", "fa-unlock-alt", "fa-unsorted", "fa-upload", "fa-usd", "fa-user", "fa-user-md", "fa-user-plus", "fa-user-secret", "fa-user-times", "fa-users", "fa-venus", "fa-venus-double", "fa-venus-mars", "fa-viacoin", "fa-video-camera", "fa-vimeo-square", "fa-vine", "fa-vk", "fa-volume-down", "fa-volume-off", "fa-volume-up", "fa-warning", "fa-wechat", "fa-weibo", "fa-weixin", "fa-whatsapp", "fa-wheelchair", "fa-wifi", "fa-windows", "fa-won", "fa-wordpress", "fa-wrench", "fa-xing", "fa-xing-square", "fa-yahoo", "fa-yelp", "fa-yen", "fa-youtube", "fa-youtube-play", "fa-youtube-square"],
        'google-fonts'               => ["Aclonica", "Allan", "Annie+Use+Your+Telescope", "Anonymous+Pro", "Allerta+Stencil", "Allerta", "Amaranth", "Anton", "Architects+Daughter", "Arimo", "Artifika", "Arvo", "Asset", "Astloch", "Bangers", "Bentham", "Bevan", "Bigshot+One", "Bowlby+One", "Bowlby+One+SC", "Brawler", "Buda:300", "Cabin", "Calligraffitti", "Candal", "Cantarell", "Cardo", "Carter One", "Caudex", "Cedarville+Cursive", "Cherry+Cream+Soda", "Chewy", "Coda", "Coming+Soon", "Copse", "Corben:700", "Cousine", "Covered+By+Your+Grace", "Crafty+Girls", "Crimson+Text", "Crushed", "Cuprum", "Damion", "Dancing+Script", "Dawning+of+a+New+Day", "Didact+Gothic", "Droid+Sans", "Droid+Sans+Mono", "Droid+Serif", "EB+Garamond", "Expletus+Sans", "Fontdiner+Swanky", "Forum", "Francois+One", "Geo", "Give+You+Glory", "Goblin+One", "Goudy+Bookletter+1911", "Gravitas+One", "Gruppo", "Hammersmith+One", "Holtwood+One+SC", "Homemade+Apple", "Inconsolata", "Indie+Flower", "IM+Fell+DW+Pica", "IM+Fell+DW+Pica+SC", "IM+Fell+Double+Pica", "IM+Fell+Double+Pica+SC", "IM+Fell+English", "IM+Fell+English+SC", "IM+Fell+French+Canon", "IM+Fell+French+Canon+SC", "IM+Fell+Great+Primer", "IM+Fell+Great+Primer+SC", "Irish+Grover", "Irish+Growler", "Istok+Web", "Josefin+Sans", "Josefin+Slab", "Judson", "Jura", "Jura:500", "Jura:600", "Just+Another+Hand", "Just+Me+Again+Down+Here", "Kameron", "Kenia", "Kranky", "Kreon", "Kristi", "La+Belle+Aurore", "Lato:100", "Lato:100italic", "Lato:300", "Lato", "Lato:bold", "Lato:900", "League+Script", "Lekton", "Limelight", "Lobster", "Lobster Two", "Lora", "Love+Ya+Like+A+Sister", "Loved+by+the+King", "Luckiest+Guy", "Maiden+Orange", "Mako", "Maven+Pro", "Maven+Pro:500", "Maven+Pro:700", "Maven+Pro:900", "Meddon", "MedievalSharp", "Megrim", "Merriweather", "Metrophobic", "Michroma", "Miltonian Tattoo", "Miltonian", "Modern Antiqua", "Monofett", "Molengo", "Mountains of Christmas", "Muli:300", "Muli", "Neucha", "Neuton", "News+Cycle", "Nixie+One", "Nobile", "Nova+Cut", "Nova+Flat", "Nova+Mono", "Nova+Oval", "Nova+Round", "Nova+Script", "Nova+Slim", "Nova+Square", "Nunito:light", "Nunito", "OFL+Sorts+Mill+Goudy+TT", "Old+Standard+TT", "Open+Sans:300", "Open+Sans", "Open+Sans:600", "Open+Sans:800", "Open+Sans+Condensed:300", "Orbitron", "Orbitron:500", "Orbitron:700", "Orbitron:900", "Oswald", "Over+the+Rainbow", "Reenie+Beanie", "Pacifico", "Patrick+Hand", "Paytone+One", "Permanent+Marker", "Philosopher", "Play", "Playfair+Display", "Podkova", "Poppins", "PT+Sans", "PT+Sans+Narrow", "PT+Sans+Narrow:regular,bold", "PT+Serif", "PT+Serif Caption", "Puritan", "Quattrocento", "Quattrocento+Sans", "Radley", "Raleway:100", "Redressed", "Rock+Salt", "Rokkitt", "Ruslan+Display", "Schoolbell", "Shadows+Into+Light", "Shanti", "Sigmar+One", "Six+Caps", "Slackey", "Smythe", "Sniglet:800", "Special+Elite", "Stardos+Stencil", "Sue+Ellen+Francisco", "Sunshiney", "Swanky+and+Moo+Moo", "Syncopate", "Tangerine", "Tenor+Sans", "Terminal+Dosis+Light", "The+Girl+Next+Door", "Tinos", "Ubuntu", "Ultra", "Unkempt", "UnifrakturCook:bold", "UnifrakturMaguntia", "Varela", "Varela Round", "Vibur", "Vollkorn", "VT323", "Waiting+for+the+Sunrise", "Wallpoet", "Walter+Turncoat", "Wire+One", "Yanone+Kaffeesatz", "Yanone+Kaffeesatz:300", "Yanone+Kaffeesatz:400", "Yanone+Kaffeesatz:700", "Yeseva+One", "Zeyada"],
        'social-icons'               => [
                'dropbox'     => [
                        'icon' => 'fa fa-dropbox',
                        'name' => 'Dropbox',
                ],
                'facebook'    => [
                        'icon' => 'fa fa-facebook',
                        'name' => 'Facebook',
                ],
                'flickr'      => [
                        'icon' => 'fa fa-flickr',
                        'name' => 'Flickr',
                ],
                'foursquare'  => [
                        'icon' => 'fa fa-foursquare',
                        'name' => 'Foursquare',
                ],
                'google-plus' => [
                        'icon' => 'fa fa-google-plus',
                        'name' => 'Google Plus',
                ],
                'instagram'   => [
                        'icon' => 'fa fa-instagram',
                        'name' => 'Instagram',
                ],
                'linkedin'    => [
                        'icon' => 'fa fa-linkedin',
                        'name' => 'Linkedin',
                ],
                'pinterest'   => [
                        'icon' => 'fa fa-pinterest',
                        'name' => 'Pinterest',
                ],
                'skype'       => [
                        'icon' => 'fa fa-skype',
                        'name' => 'Skype',
                ],
                'tumblr'      => [
                        'icon' => 'fa fa-tumblr',
                        'name' => 'Tumblr',
                ],
                'twitter'     => [
                        'icon' => 'fa fa-twitter',
                        'name' => 'Twitter',
                ],
                'vimeo'       => [
                        'icon' => 'fa fa-vimeo-square',
                        'name' => 'Vimeo',
                ],
                'youtube'     => [
                        'icon' => 'fa fa-youtube',
                        'name' => 'Youtube',
                ],

        ],
        'encryption_key'             => 'qt38Rr',
        'pages'                      => [],
        'messages'                   => [],
        'count_messages'             => [ 'model' => 'Messages'],
        'count_blog'             => [ 'model' => 'Blog'],
        'site-settings'              => [],
        'site-settings-caution-note' => 'Any changes in the website settings may render the website broken. Please be sure of what you want to change before proceeding.',
        'contact'                    => [
                ['title' => 'Scandinavia', 'address' => '', 'email' => 'schroeder.ulices@yahoo.com, leola.kerluke@yahoo.com', 'phone' => '+45 61 80 01 14, +45 61 80 01 14', 'on_footer' => 1],
                ['title' => 'Scandinavia', 'address' => '', 'email' => 'schroeder.ulices@yahoo.com, leola.kerluke@yahoo.com', 'phone' => '+45 61 80 01 14, +45 61 80 01 14', 'on_footer' => 0],
        ],
        'email-settings'             => [
                'receive-email' => 'chetan.rajbhandari@gmail.com',
                'receive-name'  => 'Chetan Rajbhandari',
        ],
];
