SELECT * FROM students;
SELECT prenom FROM `students`;
SELECT prenom,datenaissance,school FROM students;
SELECT * FROM `students` WHERE genre ="F"
SELECT * FROM `students` WHERE school ="Andy"
SELECT prenom FROM students ORDER BY prenom DESC;
INSERT INTO students(`nom`, `prenom`, `datenaissance`,`genre`, `school`) VALUES ("Dalor","Ginette",1930-01-01,"F","1");
UPDATE students SET prenom = 'Omer' WHERE prenom = "Ginette"
UPDATE students SET genre = 'M' WHERE prenom = "Omer"
DELETE FROM `students`WHERE idStudent = 3
ALTER TABLE students MODIFY school Text
UPDATE students SET school = 'Central' WHERE school = "1"
UPDATE students SET school = 'Anderlecht' WHERE school = "2"




