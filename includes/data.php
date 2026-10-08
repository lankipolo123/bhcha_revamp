<?php
// All site content that changes over time lives here.
// To update the site, edit this file only. Use null for a name or number
// that hasn't been announced yet; the page shows "To be announced".

return [
    'site' => [
        'short' => 'BHCHA',
        'name'  => 'Beverly Hills Community Homeowners Association',
        'phone' => '+63 906 073 4053',
        'hours' => 'Mon–Fri, 9am–6pm',
    ],

    'nav' => [
        'home'         => ['Home', 'index.php'],
        'about'        => ['About', 'about.php'],
        'organization' => ['Organization', 'organization.php'],
        'updates'      => ['Updates', 'updates.php'],
        'downloads'    => ['Downloads', 'downloads.php'],
        'contact'      => ['Contact', 'contact.php'],
    ],

    'resident_links' => [
        ['Discussion board', 'http://bhcha.com/board'],
        ['File repository', 'http://bhcha.com/cloud/'],
        ['Mail server', 'http://bhcha.com/mail/'],
        ['Online accounting', 'https://bhcom.org/board/index.php?action=agreement'],
    ],

    'socials' => [
        ['Join our forum', 'https://bhcom.org/board/index.php?action=signup'],
        ['Facebook page', 'https://www.facebook.com/profile.php?id=61571980777040'],
        ['Facebook group', 'https://www.facebook.com/groups/633205035719205'],
    ],

    'governing_docs' => [
        ['Articles of Incorporation', '2024', 'PDF', 'https://bhcha.com/cloud/?r=/download&path=L0FSVElDTEVTIE9GIElOQ09SUE9SQVRJT04gLVVucmVzdHJpY3RlZC9BT0kgQkhDSEFJLnBkZg%3D%3D'],
        ['Bylaws', '2024', 'PDF', 'https://bhcha.com/cloud/?r=/download&path=L0JZTEFXUyBvZiBCSENIQUkuICAtIFVucmVzdHJpY3RlZC9hbWVuZGVkYnlsYXdzYmhjaGFpLnBkZg%3D%3D'],
        ['Rules & Regulations', '2024', 'PDF', 'https://bhcom.org/cloud/?r=/download&path=L1JVTEVTICYgUkVTVFJJQ1RJT05TICBVbnJlc3RyaWN0ZWQvQkhDSEEgUnVsZXMgYW5kIFJlZ3VsYXRpb25zLnBkZg%3D%3D'],
        ['Declaration of Covenants, Conditions & Restrictions', '2024 · in the file repository', 'DOC', 'https://bhcha.com/cloud/'],
        ['Guidelines & Due Process Enforcement Procedures', '2024 · in the file repository', 'DOC', 'https://bhcha.com/cloud/'],
    ],

    // Newest first.
    'announcements' => [
        ['Town Hall Meeting', '18 January 2025 · Flyer', 'PDF', 'https://bhcha.com/cloud/?r=/download&path=L0FOTk9VTkNFTUVOVC4gLSBVbnJlc3RyaWN0ZWQgLzE4IEphbiBUSF9GbHllciBmb3IgUHJpbnRpbmcgKGNvbG9yZWQpLnBkZg%3D%3D'],
        ['BHCHA message to residents', 'Announcement', 'PNG', 'https://bhcom.org/cloud/?r=/download&path=L0FOTk9VTkNFTUVOVC4gLSBVbnJlc3RyaWN0ZWQgL0JIQ0hBIG1lc3NhZ2UgdG8gUmVzaWRlbnRzLnBuZw%3D%3D'],
    ],
    'presentations' => [
        ['A Fresh Start: BHCHA presentation handout', '18 January 2025', 'PDF', 'http://bhcha.com/cloud/?r=/download&path=L1BSRVNFTlRBVElPTlMgVW5yZXN0cmljdGVkL0hhbmRvdXRfQkhDSEEgUHJlc2VudGF0aW9uIDE4IEphbiAyMDI1X0ZpbmFsLnBkZg%3D%3D'],
        ['BHCHA overview material', '29 December 2024', 'PPT', 'http://bhcha.com/cloud/?r=/download&path=L1BSRVNFTlRBVElPTlMgVW5yZXN0cmljdGVkL0JIQ0hBIE92ZXJ2aWV3IE1hdGVyaWFsXzI5IERlYyAyMDI0LnBwdHg%3D'],
    ],
    // Same shape as announcements; empty lists show "No ... posted yet."
    'events'         => [],
    'board_meetings' => [],
    'projects'       => [],
    'articles'       => [],

    'board' => [
        ['Sebastian Quiniones', 'President'],
        ['Miguel Castro', 'Vice President'],
        ['Myra Reinoso', 'Secretary & Treasurer'],
        ['Bernardita McFarland', 'Trustee'],
        ['Ed Millana', 'Trustee'],
    ],
    'committees' => [
        [null, 'Covenant'],
        ['Arturo Cervania', 'Electoral'],
        [null, 'Budget & Financial'],
        [null, 'Architectural'],
        ['Richelle Capellan', 'Social & Communications'],
        [null, 'Dispute & Resolution'],
        [null, 'Legal'],
        ['Rodel Livelo', 'Security & Safety'],
    ],
    'management' => [
        [null, 'Admin'],
        [null, 'Accounting'],
        [null, 'Engineering'],
        [null, 'Maintenance'],
    ],

    // [label, folder path inside BHCHA Cloud, or null to open the root]
    'folders' => [
        ['Announcements', '/ANNOUNCEMENT. - Unrestricted '],
        ['Articles of Incorporation', '/ARTICLES OF INCORPORATION -Unrestricted'],
        ['Bylaws', '/BYLAWS of BHCHAI.  - Unrestricted'],
        ['DHSUD documents', '/DSHUD DOCS- Unrestricted'],
        ['Election documents', '/Election Docs'],
        ['Events', '/EVENTS. Unrestricted '],
        ['Forms', '/FORMS Unrestricted'],
        ['Issuances', '/ISSUANCES. Unrestricted'],
        ['Legal documents', '/LEGAL DOCS. Unrestricted'],
        ['Meetings', '/MEETINGS Unrestricted'],
        ['Miscellaneous', '/MISCELLANEOUS. Unrestricted'],
        ['Presentations', '/PRESENTATIONS Unrestricted'],
        ['Reports', '/REPORTS. Unrestricted'],
        ['Rules & Restrictions', '/RULES & RESTRICTIONS  Unrestricted'],
        ['Utilities', '/UTILITIES. Unrestricted'],
        ['Guidelines', null],
        ['Others', null],
    ],

    'offices' => [
        ['Registered address', 'No. 11 Poinsettia Drive, Beverly Hills, Taytay, Rizal'],
        ['Satellite office', 'No. 14 Beverly Hills Ave., Beverly Hills, Antipolo City'],
    ],
    'emails' => [
        ['General inquiries', 'info@bhcha.com'],
        ['Management', 'management@bhcha.com'],
        ['Administration', 'admin@bhcha.com'],
        ['Support & security', 'support@bhcha.com'],
        ['Accounting', 'accounting@bhcha.com'],
    ],
    'emergency' => [
        ['Security guard, Antipolo gate', 'Antipolo', null],
        ['Security guard, Taytay outpost', 'Taytay', null],
        ['Barangay Beverly Hills', 'Antipolo', null],
        ['Antipolo LGU', 'Antipolo', '0927 755 9911 · (02) 8696 9911'],
        ['Antipolo Police', 'Antipolo', '0920 898 8369 · 0966 299 2229 · (02) 8697 2409 · (02) 8529 5856'],
        ['Antipolo Fire Station', 'Antipolo', '(02) 8871 2865 · (02) 8571 4648 · (02) 8250 0497'],
        ['Hospitals', 'Antipolo', '(02) 8639 8453 · (02) 8251 7559 · (02) 8240 5683 · (02) 8240 5132'],
        ['Barangay Dolores', 'Taytay', '0998 887 8677 · (02) 8658 9874'],
        ['Taytay LGU', 'Taytay', '(02) 8284 4770 · (02) 8286 6159'],
        ['Taytay Police', 'Taytay', '0936 950 7608 · 0998 598 5730'],
        ['Taytay Fire Station', 'Taytay', '(02) 8661 9887 · (02) 896 5258'],
        ['Taytay Hospital', 'Taytay', '0917 165 9009 · 0917 625 0065 · (02) 8571 4858'],
        ['Meralco', 'Electricity', '16211'],
        ['Manila Water', 'Water', '1627'],
    ],
];
