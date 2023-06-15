import 'package:flutter/material.dart';
import 'package:flutter_mysql/models/note.dart';

class NotesAppOperation with ChangeNotifier {
  List<Note> _notes = [];
  List<Note> get getNotes => _notes;

  void addNewNote(String title, String description) {
    Note note = Note(title, description);
    _notes.add(note);
    notifyListeners();
  }
}
