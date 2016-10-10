var Christophe = new User("Christophe","Swolfs");
Christophe.sayHello();
console.log(Christophe.toString());
console.log(Christophe);

console.log();
console.log("------------------------------------");
console.log();

var myProject = new Project("myProject", Christophe);
console.log(myProject.toString());
console.log(myProject);




var A = "test";
var X = "test2";
var myMap = new Map();
var keyString = "a string",
    keyObj = {};
myMap.set("test", "value associated with 'a string'");
myMap.set(keyObj, "value associated with keyObj");
console.log(myMap);
console.log(myMap.get("test"));




//
//angular.module('angularApp',[])
//    .controller('myDataController',function () {
//       var dataController = this;
//
//        this.myMap = new Map();
//        myMap.set("test", "value associated with 'a string'");
//        myMap.set("te", "value associated with keyObj");
//
//        this.data = myMap.get("test");
//        this.data = myMap;
//
//    });
//
