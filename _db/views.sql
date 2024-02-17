CREATE OR REPLACE VIEW `view_student` AS
SELECT
    LPAD(id, 5, '0') AS `longIDNumber`,
    student.*,                        
    CONCAT(nameLast,', ',nameFirst,' ',nameMiddle,' (',id,')') AS `studentInfo`
FROM student;