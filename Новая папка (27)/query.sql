1) Получить список с информацией обо всех сотрудниках
SELECT * FROM workers

2) Получить список всех сотрудников с именем 'Давид'
SELECT * FROM workers WHERE fio = 'Давид'

3) Получить список всех сотрудников с профессией 'программист'
SELECT * FROM workers WHERE profession = 'программист'

4) Получить список всех сотрудников из 50го отдела с зарплатой(salary), большей 4000
SELECT * FROM workers WHERE department = 50 AND salary > 4000

5) Получить список всех сотрудников у которых пол равен 'м'
SELECT * FROM workers WHERE gender = 'м'

6) Получить список всех сотрудников у которых зарплата между 5000 и 15000
SELECT * FROM workers WHERE salary BETWEEN 5000 AND 15000

7) Получить список всех сотрудников зарплата которых кратна 2
SELECT * FROM workers WHERE salary % 2 = 0