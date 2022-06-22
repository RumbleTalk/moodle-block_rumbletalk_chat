export const init = () => {
    (function (g, v, w, d, s, a, b) {
        w['rumbleTalkMessageQueueName'] = g;
        w[g] = w[g] ||
            function () {
                (w[g].q = w[g].q || []).push(arguments);
            };
        a = d.createElement(s);
        b = d.getElementsByTagName(s)[0];
        a.async = 1;
        a.src = 'https://d1pfint8izqszg.cloudfront.net/api/' + v + '/sdk.js';
        b.parentNode.insertBefore(a, b);
    })('rtmq', 'v1.0.0', window, document, 'script');
    alert('It changed!');
};