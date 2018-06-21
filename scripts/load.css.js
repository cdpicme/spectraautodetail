/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* First CSS File */
var csslink1 = document.createElement('link');
csslink1.rel = 'stylesheet';
csslink1.href = '../styles/newstyles.css';
csslink1.type = 'text/css';
var godefer = document.getElementsByTagName('link')[0];
godefer.parentNode.insertBefore(csslink1, godefer);

/* Second CSS File */
var csslink2 = document.createElement('link');
csslink2.rel = 'stylesheet';
csslink2.href = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css';
csslink2.type = 'text/css';
var godefer2 = document.getElementsByTagName('link')[0];
godefer2.parentNode.insertBefore(csslink2, godefer2);

