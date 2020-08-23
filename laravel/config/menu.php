<?php

/**
 * FOR ROLE EVERY PAGE
 * ALL/SUP/ADM
 * ALL Without Login 
 * Then Config to Route
 */
$role = [
	'home' => [
		'topBanner' => ['SUP', 'ADM'],
		'topBannerAdd' => ['SUP', 'ADM'],
		'topBannerEdit' => ['SUP', 'ADM'],
		'topBannerDelete' => ['SUP', 'ADM'],
		'topBannerOrder' => ['SUP', 'ADM'],
		'aboutUs' => ['SUP', 'ADM'],
		'aboutUsEdit' => ['SUP', 'ADM'],
		'howWorks' => ['SUP', 'ADM'],
		'howWorksAdd' => ['SUP', 'ADM'],
		'howWorksEdit' => ['SUP', 'ADM'],
		'howWorksDelete' => ['SUP', 'ADM'],
		'howWorksOrder' => ['SUP', 'ADM'],
		'polisAsuransi' => ['SUP', 'ADM'],
		'polisAsuransiEdit' => ['SUP', 'ADM'],
		'undangTeman' => ['SUP', 'ADM'],
		'undangTemanEdit' => ['SUP', 'ADM'],
		'siteName' => ['SUP', 'ADM'],
		'siteNameEdit' => ['SUP', 'ADM'],
		'metaDesc' => ['SUP', 'ADM'],
		'metaDescEdit' => ['SUP', 'ADM'],
		'metaKeywords' => ['SUP', 'ADM'],
		'metaKeywordsEdit' => ['SUP', 'ADM'],
		'analytic' => ['SUP', 'ADM'],
		'analyticEdit' => ['SUP', 'ADM'],
		'changePassword' => ['SUP', 'ADM'],
	],
];


/**
 * FOR CREATE SIDE BAR MENU 
 */
$icon_gallery = 'icon_gallery';
$icon_edit = 'icon_edit';
$icon_password = 'icon_password';
$icon_list_bullets = 'icon_list_bullets';
$icon_contact = 'icon_contact';

$menu = [
    'home' => [
        'text'  => 'Home',
        'url'   => 'admin',
        'mainPage'	=> 'home',
        'submenu' => [
            [
		        'text'  => 'Home',
		        'type'  => 'title',
		        'mainPage'	=> 'home',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Top Banners',
		        'type'  => 'menu',
		        'url'   => 'admin/topbanners',
		        'icon'  => $icon_gallery,
		        'mainPage'	=> 'home',
		        'page'	=> 'topbanners',
		        'route'	=> 'topbanners-create',
            ],
            [
		        'text'  => 'About',
		        'type'  => 'menu',
		        'url'   => 'admin/aboutus',
		        'icon'  => $icon_edit,
		        'mainPage'	=> 'home',
		        'page'	=> 'aboutus',
		        'route'	=> 'aboutus-edit',
            ],
            [
		        'text'  => 'How Works',
		        'type'  => 'menu',
		        'url'   => 'admin/howworks',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'home',
		        'page'	=> 'howworks',
		        'route'	=> 'howworks-list',
            ],
            [
                'text'  => 'Partner',
                'type'  => 'menu',
                'url'   => 'admin/partner',
                'icon'  => $icon_list_bullets,
                'mainPage'	=> 'home',
                'page'	=> 'partner',
		        'route'	=> 'partner-list',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Default Meta',
		        'type'  => 'title',
		        'mainPage'	=> 'home',
            ],
            [
		        'text'  => 'Website Name',
		        'type'  => 'menu',
		        'url'   => 'admin/sitename',
		        'icon'  => $icon_edit,
		        'mainPage'	=> 'home',
		        'page'	=> 'sitename',
		        'route'	=> 'sitename-edit',
            ],
            [
		        'text'  => 'Keyword',
		        'type'  => 'menu',
		        'url'   => 'admin/metakey',
		        'icon'  => $icon_edit,
		        'mainPage'	=> 'home',
		        'page'	=> 'metakey',
		        'route'	=> 'metakey-edit',
            ],
            [
		        'text'  => 'Description',
		        'type'  => 'menu',
		        'url'   => 'admin/metadesc',
		        'icon'  => $icon_edit,
		        'mainPage'	=> 'home',
		        'page'	=> 'metadesc',
		        'route'	=> 'metadesc-edit',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Password',
		        'type'  => 'title',
		        'mainPage'	=> 'home',
            ],
            [
		        'text'  => 'Change Password',
		        'type'  => 'menu',
		        'url'   => 'admin/changepassword',
		        'icon'  => $icon_password,
		        'mainPage'	=> 'home',
		        'page'	=> 'changepassword',
		        'route'	=> 'changepassword-edit',
            ],
        ],
    ],
    'products' => [
        'text'  => 'Products',
        'url'   => 'admin/gadgetcategory',
        'mainPage'	=> 'products',
        'submenu' => [
            [
		        'text'  => 'Gadget',
		        'type'  => 'title',
		        'mainPage'	=> 'products',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Gadget Category',
		        'type'  => 'menu',
		        'url'   => 'admin/gadgetcategory',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'products',
		        'page'	=> 'gadgetcategory',
		        'route'	=> 'gadgetcategory-list',
            ],
            [
		        'text'  => 'Gadget Type',
		        'type'  => 'menu',
		        'url'   => 'admin/gadgettype',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'products',
		        'page'	=> 'gadgettype',
		        'route'	=> 'gadgettype-list',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Products',
		        'type'  => 'title',
		        'mainPage'	=> 'products',
            ],
            [
		        'text'  => 'Product Text',
		        'type'  => 'menu',
		        'url'   => 'admin/producttext',
		        'icon'  => $icon_edit,
		        'mainPage'	=> 'products',
		        'page'	=> 'producttext',
		        'route'	=> 'producttext-list',
            ],
            [
		        'text'  => 'Products Category',
		        'type'  => 'menu',
		        'url'   => 'admin/productcategory',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'products',
		        'page'	=> 'productcategory',
		        'route'	=> 'productcategory-list',
            ],
            [
		        'text'  => 'Products Insurance',
		        'type'  => 'menu',
		        'url'   => 'admin/products',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'products',
		        'page'	=> 'products',
		        'route'	=> 'products-list',
            ],
            [
		        'text'  => 'Products',
		        'type'  => 'menu',
		        'url'   => 'admin/productsparepart',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'products',
		        'page'	=> 'productsparepart',
		        'route'	=> 'productsparepart-list',
            ],
        ],
    ],

    'vendor' => [
        'text'  => 'Partner',
        'url'   => 'admin/vendor',
        'mainPage'	=> 'vendor',
        'submenu' => [
            [
		        'text'  => 'Partner Management',
		        'type'  => 'title',
		        'mainPage'	=> 'vendor',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Partnership Channel',
		        'type'  => 'menu',
		        'url'   => 'admin/partnershipchannel',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'vendor',
		        'page'	=> 'partnershipchannel',
		        'route'	=> 'partnershipchannel-list',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Vendor Management',
		        'type'  => 'title',
		        'mainPage'	=> 'vendor',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Vendor',
		        'type'  => 'menu',
		        'url'   => 'admin/vendor',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'vendor',
		        'page'	=> 'vendor',
		        'route'	=> 'vendor-list',
            ],
        ],
    ],

    'user' => [
        'text'  => 'User',
        'url'   => 'admin/user',
        'mainPage'	=> 'user',
        'submenu' => [
            [
		        'text'  => 'User Management',
		        'type'  => 'title',
		        'mainPage'	=> 'user',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'User',
		        'type'  => 'menu',
		        'url'   => 'admin/user',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'user',
		        'page'	=> 'user',
		        'route'	=> 'user-list',
            ],
            [
		        'text'  => 'Role',
		        'type'  => 'menu',
		        'url'   => 'admin/role',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'user',
		        'page'	=> 'role',
		        'route'	=> 'role-list',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Member',
		        'type'  => 'menu',
		        'url'   => 'admin/member',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'user',
		        'page'	=> 'member',
		        'route'	=> 'member-list',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Location',
		        'type'  => 'menu',
		        'url'   => 'admin/location',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'user',
		        'page'	=> 'location',
		        'route'	=> 'location-list',
            ],
        ],
    ],

    'transaction' => [
        'text'  => 'Transaction',
        'url'   => 'admin/transaction',
        'mainPage'	=> 'transaction',
        'submenu' => [
            [
		        'text'  => 'Transaction',
		        'type'  => 'title',
		        'mainPage'	=> 'transaction',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Transaction',
		        'type'  => 'menu',
		        'url'   => 'admin/transaction',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'transaction',
		        'page'	=> 'transaction',
		        'route'	=> 'transaction-list',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Invoice',
		        'type'  => 'menu',
		        'url'   => 'admin/invoice',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'transaction',
		        'page'	=> 'invoice',
		        'route'	=> 'invoice-list',
            ],
        ],
    ],

    'report' => [
        'text'  => 'Report',
        'url'   => 'admin/report',
        'mainPage'	=> 'report',
        'submenu' => [
            [
		        'text'  => 'Report',
		        'type'  => 'title',
		        'mainPage'	=> 'report',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Report',
		        'type'  => 'menu',
		        'url'   => 'admin/report',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'report',
		        'page'	=> 'report',
		        'route'	=> 'report-list',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Report Diagram',
		        'type'  => 'menu',
		        'url'   => 'admin/diagram',
		        'icon'  => $icon_list_bullets,
		        'mainPage'	=> 'report',
		        'page'	=> 'diagram',
		        'route'	=> 'diagram-list',
            ],
        ],
    ],

    'contact' => [
        'text'  => 'Contact',
        'url'   => 'admin/contact',
        'mainPage'	=> 'contact',
        'submenu' => [
            [
		        'text'  => 'Contact',
		        'type'  => 'title',
		        'mainPage'	=> 'contact',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Address',
		        'type'  => 'menu',
		        'url'   => 'admin/address',
		        'icon'  => $icon_contact,
		        'mainPage'	=> 'contact',
		        'page'	=> 'address',
		        'route'	=> 'address-edit',
            ],
            [
		        'text'  => 'Emails',
		        'type'  => 'menu',
		        'url'   => 'admin/emails',
		        'icon'  => $icon_contact,
		        'mainPage'	=> 'contact',
		        'page'	=> 'emails',
		        'route'	=> 'emails-edit',
            ],
        ],
    ],
    'template' => [
        'text'  => 'Template',
        'url'   => 'admin/template',
        'mainPage'	=> 'template',
        'submenu' => [
            [
		        'text'  => 'Template',
		        'type'  => 'title',
		        'mainPage'	=> 'template',
            ],
            [
		        'text'  => 'divider',
		        'type'  => 'divider',
		        'icon'  => 'divider',
            ],
            [
		        'text'  => 'Template',
		        'type'  => 'menu',
		        'url'   => 'admin/template',
		        'icon'  => $icon_edit,
		        'mainPage'	=> 'template',
		        'page'	=> 'template',
		        'route'	=> 'emails-list',
            ],
        ],
    ],
];

$mappingMenu = [
	"topbanners" => "Top Banner",
	"aboutus" => "About Us",
	"howworks" => "How Works",
	"partner" => "Partner",
	"sitename" => "Website Name",
	"metakey" => "Keyword",
	"metadesc" => "Description",
	"changepassword" => "Change Password",
	"gadgetcategory" => "Gadget Category",
	"gadgettype" => "Gadget Type",
	"producttext" => "Product Text",
	"productcategory" => "Product Category",
	"products" => "Product Insurance",
	"productsparepart" => "Products",
	"partnershipchannel" => "Partnership Channel",
	"vendor" => "Vendor",
	"user" => "User",
	"role" => "Role",
	"gadget" => "Gadget",
	"member" => "Member",
	"location" => "Location",
	"transaction" => "Transaction",
	"transactioninvoice" => "Invoice",
	"invoice" => "Invoice",
	"report" => "Report",
	"diagram" => "Report Diagram",
	"contact" => "Contact",
	"address" => "Address",
	"emails" => "Emails",
	"template" => "Template",
	"producttext" => "Product",
];
$whiteList = ["home-list", "adminHome", 'login', 'logout', 'register', 'password.request', 'password.email', 'password.reset', 'generate.menu', 'accessDenied', 'reportPDF', 'reportExcel', 'emailReport', 'reportGrowth'];
return ['menu' => $menu, 'role' => $role, 'mappingMenu' => $mappingMenu, 'whiteList' => $whiteList];