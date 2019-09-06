import Model from "../Model.js";

export default class File extends Model {
    static baseRoute() {
        return "files";
    }

    static index(parameters, completion) {
        Model.index(File.baseRoute(), parameters, completion);
    }

    constructor(id, name, text, parent, lessonId) {
        super(File.baseRoute());
        this.id = id;
        this.name = name;
        this.text = text;
        this.parent = parent;
        this.lessonId = lessonId;
    }

    parameters() {
        return {
            name: this.name,
            text: this.text,
            parent_folder_id: this.parent.id,
            lesson_id: this.lessonId
        };
    }

    get id() {
        return this._id;
    }

    set id(value) {
        this._id = value;
    }

    get name() {
        return this._name;
    }

    set name(value) {
        this._name = value;
    }

    get text() {
        return this._text;
    }

    set text(value) {
        this._text = value;
    }

    get parent() {
        return this._parent;
    }

    set parent(value) {
        this._parent = value;
    }

    get lessonId() {
        return this._lessonId;
    }

    set lessonId(value) {
        this._lessonId = value;
    }
}
