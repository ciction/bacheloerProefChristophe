function User(firstName, lastName, data) {
    this.m_firstName = firstName;
    this.m_lastName = lastName;
    this.m_data = data;
}

User.prototype = {
    constructor: User,
    sayHello:function () {
        console.log("Hello, my name is " + this.m_firstName);
    },

    toString:function () {
        return  this.m_firstName + "\n" + this.m_lastName + "\n" + this.m_data;
    }
}


