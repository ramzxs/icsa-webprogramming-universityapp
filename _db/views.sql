CREATE OR REPLACE VIEW `view_student` AS
SELECT
    LPAD(id, 5, '0') AS `longIDNumber`,
    student.*,                        
    CONCAT(nameLast,', ',nameFirst,' ',nameMiddle,' (',id,')') AS `studentInfo`
FROM student;


CREATE OR REPLACE VIEW `view_sales` AS
SELECT 
    DATE(dateTime) AS `day`,
    SUM(price)
FROM
    sales
GROUP BY
    DATE(dateTime)
ORDER BY
    `day` ASC;