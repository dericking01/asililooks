<?php

return [
    'settings' => [
        'title' => '최적화',
        'description' => 'HTML 출력 최소화, 인라인 CSS, 주석 제거...',
        'enable' => '페이지 속도 최적화를 활성화하시겠습니까?',
    ],
    'collapse_white_space' => '공백 축소',
    'collapse_white_space_description' => '이 필터는 불필요한 공백을 제거하여 HTML 파일에서 전송되는 바이트를 줄입니다.',
    'elide_attributes' => '속성 제거',
    'elide_attributes_description' => '이 필터는 지정된 값이 해당 속성의 기본값과 같을 때 태그에서 속성을 제거하여 HTML 파일의 전송 크기를 줄입니다. 이는 적당한 수의 바이트를 절약할 수 있으며 영향을 받는 태그를 표준화하여 문서를 더욱 압축 가능하게 만들 수 있습니다.',
    'inline_css' => '인라인 CSS',
    'inline_css_description' => '이 필터는 CSS를 헤더로 이동하여 태그의 인라인 "style" 속성을 클래스로 변환합니다.',
    'insert_dns_prefetch' => 'DNS 프리페치 삽입',
    'insert_dns_prefetch_description' => '이 필터는 브라우저가 DNS 프리페칭을 수행할 수 있도록 HEAD에 태그를 삽입합니다.',
    'remove_comments' => '주석 제거',
    'remove_comments_description' => '이 필터는 HTML, JS 및 CSS 주석을 제거합니다. 필터는 주석을 제거하여 HTML 파일의 전송 크기를 줄입니다. HTML 파일에 따라 이 필터는 네트워크에서 전송되는 바이트 수를 크게 줄일 수 있습니다.',
    'remove_quotes' => '따옴표 제거',
    'remove_quotes_description' => '이 필터는 HTML 속성에서 불필요한 따옴표를 제거합니다. 다양한 HTML 사양에서 필요하지만, 속성 값이 특정 문자 하위 집합(영숫자 및 일부 구두점 문자)으로 구성되어 있을 때 브라우저는 생략을 허용합니다.',
    'defer_javascript' => '자바스크립트 지연',
    'defer_javascript_description' => 'HTML에서 자바스크립트 실행을 지연시킵니다. 일부 스크립트에서 지연을 취소해야 하는 경우 data-pagespeed-no-defer를 스크립트 속성으로 사용하여 지연을 취소하십시오.',
];
