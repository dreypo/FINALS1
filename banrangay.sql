CREATE TABLE appointments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  ref_no_date VARCHAR(50),
  complaint TEXT,
  status VARCHAR(50)
);

INSERT INTO appointments (name, ref_no_date, complaint, status) VALUES
('Vince Lee', '#01-01062025', 'Check-up for Elders', 'Pending'),
('Jayson Stark', '#02-01062025', 'Sick Check-up', 'Completed');
