function Project(name, data) {
    this.m_name = name;
    this.m_data = data;
}

Project.prototype = {
    constructor: Project,


    toString:function () {
        return  this.m_name + "\n" + this.m_data;
    }
}




