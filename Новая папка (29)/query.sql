Задача 1. Вывести название и цену для всех анализов, которые продавались 5 февраля 2018

SELECT analysis.analysis_name, analysis.analysis_cost FROM analysis, orders WHERE analysis.analysis_id = orders.orders_idan AND orders.orders_date = '2018-02-05'





Задача 2. Вывести все заказы, у которых цена стоимость 40 000. Вывести: название, дату и стоимость.

SELECT analysis.analysis_name, orders.orders_date, analysis.analysis_cost FROM analysis, orders WHERE analysis.analysis_id = orders.orders_idan AND analysis.analysis_cost = 40000





Задача 3. Нужно вывести анализы всех групп, у которых температура хранения больше 15 градусов. Вывести: название, название группы, температурный режим хранения и стоимость

SELECT analysis.analysis_name, groups.groups_name, groups.groups_temp, analysis.analysis_cost FROM analysis, groups WHERE analysis.analysis_group = groups.groups_name AND groups.groups_temp > 15