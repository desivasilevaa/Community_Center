-- Community Center CRUD
use CommunityCenter;
 
insert into Events(name, type, date, info, price, poster)
values("Moonlight", "Филм", "2025-08-21", "Moonlight is a 2016 American coming-of-age drama film<br> written and directed by Barry Jenkins, 
 based on Tarell Alvin <br>McCraney's unpublished semi-autobiographical play In <br> Moonlight Black Boys Look Blue. 
 It stars Trevante Rhodes, <br>André Holland, Janelle Monáe in her first film appearance, <br>Ashton Sanders, Jharrel Jerome, Naomie Harris, and Mahershala Ali.<br>",
 4.50, 'C:/xampp/htdocs/21502/Project/moonlight_poster.jpg');

update Users 
set first_name = "Desi",
last_name = "Vasileva"
where user_id = 2; 

insert into Events(name, type, date, info, price, poster)
values("Постановка: 'И верният отговор е'", "Комедия", "2025-05-28", "Гостуват ни: Луиза Григорова-Макариев, Боряна Братоева <br> и Христо Пъдев с постановката 'И верният отговор е'
<br>Ще станете част от една пернишка история за любов от пръв поглед.<br>
Една изневяра, трима пламенни перничани, един любим отбор <br>и една мечта, събрани на едно място, с обещание <br>за много смях и неочакван край. <br>",
 15.00, 'C:/xampp/htdocs/21502/Project/posters/комедия.jpg');
 
insert into Events(name, type, date, info, price, poster)
values("Концерт - Веселин Маринов", "Концерт", "2025-04-14", 'Билетите за концерта на Веселин Маринов са в продажба!<br>
НЧ "Тодор Пеев-1871" за пореден път ще бъде част <br>от турнето на Веселин Маринов.
Станете част от "Да се събудиш до мен".',
 30.00, 'C:/xampp/htdocs/21502/Project/posters/концерт.jpg');
 
insert into Events(name, type, date, info, price, poster)
values('"Съседите отгоре"', "Постановка", "2025-06-04", 'Билетите за "Съседите отгоре" могат да бъдат чудесен подарък <br>
за Свети Валентин! <br>Постановката е за възраст 16+!',
 15.00, 'C:/xampp/htdocs/21502/Project/posters/постановка2.jpg');
 
insert into Events(name, type, date, info, price, poster)
values('"Роднини"', "Постановка", "2025-05-13", 'Заповядайте на хитовата постановката "Роднини" с Николай Урумов.
Историята е съвременна, поднесена с неподправено чувство за хумор и, 
докато се смеем на героите, няма как да не се видим като в огледало.',
 15.00, 'C:/xampp/htdocs/21502/Project/posters/постановка.jpg');
 
insert into Events(name, type, date, info, price, poster)
values('"Малки изневери"', "Постановка", "2025-05-13", 'Ще може да гледате постановката „Малки изневери“ от Нийл Саймъл
 и Уди Алън С участието на: Искра Радева, Тончо Токмакчиев,
 Георги Кадурин, Марияна Миланова',
 20.00, 'C:/xampp/htdocs/21502/Project/posters/театър.jpg');
 
insert into Events(name, type, date, info, price, poster)
values('Магическо шоу Хедон', "Магическо шоу", "2025-05-12", 'Представяме ви магическото шоу на годината - уникално събитие,
 което ще ви пренесе в свят на изумителни илюзии, левитация и невиждани до момента трикове! ',
 10.00, 'C:/xampp/htdocs/21502/Project/posters/magic.jpg');
 
update Events 
set info =  'Заповядайте на хитовата постановката "Роднини" с Николай Урумов.
Историята е съвременна, поднесена с неподправено чувство за хумор и, 
докато се смеем на героите, няма как да <br>не се видим като в огледало.'
 where event_id = 5;
 
 update Events 
set date = "2025-05-23"
 where event_id = 6;
 
 SELECT Seats.seat FROM Seats WHERE user_id=1 order by seat_id desc limit 1;
 