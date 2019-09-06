import Model from "../../Model.js";

export default class DescriptionTarget extends Model {
    static baseRoute() {
        return "description_targets";
    }

    static index(parameters, completion) {
        Model.index(DescriptionTarget.baseRoute(), parameters, completion);
    }

    constructor(id, startIndex, endIndex, descriptionId) {
        super(DescriptionTarget.baseRoute());
        this.id = id;
        this.startIndex = startIndex;
        this.endIndex = endIndex;
        this.descriptionId = descriptionId;
        this.hasUpdated = false;
        this.hasDeleted = false;
    }

    parameters() {
        return {
            start_index: this.startIndex,
            end_index: this.endIndex,
            description_id: this.descriptionId
        };
    }

    get id() {
        return this._id;
    }

    set id(value) {
        this._id = value;
    }

    get startIndex() {
        return this._startIndex;
    }

    set startIndex(value) {
        this._startIndex = value;
    }

    get endIndex() {
        return this._endIndex;
    }

    set endIndex(value) {
        this._endIndex = value;
    }

    get descriptionId() {
        return this._descriptionId;
    }

    set descriptionId(value) {
        this._descriptionId = value;
    }

    get hasUpdated() {
        return this._hasUpdated;
    }

    set hasUpdated(value) {
        this._hasUpdated = value;
    }

    get hasDeleted() {
        return this._hasDeleted;
    }

    set hasDeleted(value) {
        this._hasDeleted = value;
    }
}
