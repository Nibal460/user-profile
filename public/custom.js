// Check for touch support and add corresponding class to HTML element
(function (window, document) {
    var docEl = document.documentElement;
    docEl.className += ('ontouchstart' in window || window.DocumentTouch && document instanceof DocumentTouch) ? ' touch' : ' no-touch';
})(window, document);

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PGD22NN');</script>
<!-- End Google Tag Manager --><script type="text/javascript">window.__WEBFLOW_CURRENCY_SETTINGS = {"currencyCode":"EUR","symbol":"€","decimal":",","fractionDigits":2,"group":".","template":"{{wf {&quot;path&quot;:&quot;symbol&quot;,&quot;type&quot;:&quot;PlainText&quot;\\} }} {{wf {&quot;path&quot;:&quot;amount&quot;,&quot;type&quot;:&quot;CommercePrice&quot;\\} }} {{wf {&quot;path&quot;:&quot;currencyCode&quot;,&quot;type&quot;:&quot;PlainText&quot;\\} }}","hideDecimalForWholeNumbers":false};</script>

// Configure currency settings
window.__WEBFLOW_CURRENCY_SETTINGS = {
    "currencyCode": "EUR",
    "symbol": "€",
    "decimal": ",",
    "fractionDigits": 2,
    "group": ".",
    "template": "{{wf {&quot;path&quot;:&quot;symbol&quot;,&quot;type&quot;:&quot;PlainText&quot;} }} {{wf {&quot;path&quot;:&quot;amount&quot;,&quot;type&quot;:&quot;CommercePrice&quot;} }} {{wf {&quot;path&quot;:&quot;currencyCode&quot;,&quot;type&quot;:&quot;PlainText&quot;} }}",
    "hideDecimalForWholeNumbers": false
};
