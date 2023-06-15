class Note {
  int _id = 0;
  String _title = '';
  String _desc = '';

  Note(this._title, this._desc);

  Note.fromMap(Map<String, dynamic> map) {
    this._id = map["id"];
    this._title = map["title"];
    this._desc = map["description"];
  }

  int get id => _id;
  String get title => _title;
  String get description => _desc;

  set title(String value) {
    _title = value;
  }

  set description(String value) {
    _desc = value;
  }

  Map<String, dynamic> toMap() {
    Map<String, dynamic> map = Map<String, dynamic>();
    map["title"] = title;
    map["description"] = description;
    return map;
  }
}
