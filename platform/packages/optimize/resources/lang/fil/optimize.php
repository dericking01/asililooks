<?php

return [
    'settings' => [
        'title' => 'I-optimize',
        'description' => 'I-minify ang HTML output, inline CSS, alisin ang mga komento...',
        'enable' => 'Paganahin ang pag-optimize ng bilis ng pahina?',
    ],
    'collapse_white_space' => 'I-collapse ang white space',
    'collapse_white_space_description' => 'Binabawasan ng filter na ito ang mga bytes na nailipat sa isang HTML file sa pamamagitan ng pag-alis ng hindi kinakailangang white space.',
    'elide_attributes' => 'I-elide ang mga attribute',
    'elide_attributes_description' => 'Binabawasan ng filter na ito ang laki ng paglipat ng mga HTML file sa pamamagitan ng pag-alis ng mga attribute mula sa mga tag kapag ang tinukoy na halaga ay katumbas ng default na halaga para sa attribute na iyon. Maaari itong makatipid ng modest na bilang ng mga bytes, at maaaring gawing mas nako-compress ang dokumento sa pamamagitan ng pag-canonicalize ng mga apektadong tag.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Binabago ng filter na ito ang inline na "style" attribute ng mga tag sa mga class sa pamamagitan ng paglipat ng CSS sa header.',
    'insert_dns_prefetch' => 'Maglagay ng DNS prefetch',
    'insert_dns_prefetch_description' => 'Nag-inject ang filter na ito ng mga tag sa HEAD upang paganahin ang browser na gumawa ng DNS prefetching.',
    'remove_comments' => 'Alisin ang mga komento',
    'remove_comments_description' => 'Inaalis ng filter na ito ang mga HTML, JS at CSS na komento. Binabawasan ng filter ang laki ng paglipat ng mga HTML file sa pamamagitan ng pag-alis ng mga komento. Depende sa HTML file, maaaring makabuluhang mabawasan ng filter na ito ang bilang ng mga bytes na nailipat sa network.',
    'remove_quotes' => 'Alisin ang mga panipi',
    'remove_quotes_description' => 'Inaalis ng filter na ito ang hindi kinakailangang mga panipi mula sa mga HTML attribute. Bagaman kinakailangan ng iba\'t ibang mga HTML specification, pinapayagan ng mga browser ang kanilang pag-alis kapag ang halaga ng isang attribute ay binubuo ng tiyak na subset ng mga karakter (alphanumeric at ilang mga punctuation character).',
    'defer_javascript' => 'I-defer ang javascript',
    'defer_javascript_description' => 'Ipinagpapaliban ang pagpapatupad ng javascript sa HTML. Kung kinakailangan na kanselahin ang pag-defer sa ilang script, gamitin ang data-pagespeed-no-defer bilang script attribute upang kanselahin ang pag-defer.',
];
