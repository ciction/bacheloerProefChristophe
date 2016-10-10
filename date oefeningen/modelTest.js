var d = new Date();
//var d = new Date(year, month, day, hours, minutes, seconds, milliseconds);
var d2 = new Date(2016, 9, 9, 0, 0, 0, 0);


console.log(d.getDay());
console.log(d);
console.log(d2.getDay() || 7);  /* 0 (zondag) wordt 7 */
console.log(d2);