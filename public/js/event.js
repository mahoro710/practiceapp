var events = [
  {'Date': new Date(2020, 6, 7), 'Title': ''},
  {'Date': new Date(2020, 6, 18), 'Title': '●●イベント開催', 'Link': 'https://yahoo.co.jp/'},
  {'Date': new Date(2020, 6, 27), 'Title': '〇〇企画創業20周年記念', 'Link': 'https://www.google.com/'},
];

var settings = {};
var element = document.getElementById('caleandar');
/*global calendar*/(element, events, settings);