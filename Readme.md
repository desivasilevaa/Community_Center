# Проект "Народно Читалище"

Това е уеб проект, базиран на PHP, за народно читалище с изображения и база данни MySQL.

## Необходими изисквания

- Docker
- Docker Compose

## Инструкции за инсталация

1. Поставете файловете на проекта в основната директория.
2. Стартирайте контейнерите със следната команда:

```bash
docker-compose up --build
```

3. Отворете приложението в браузър на адрес: [http://localhost:8080](http://localhost:8080)

## Данни за достъп до MySQL

- Хост: db
- Потребител: user
- Парола: password
- База данни: community_center

## Забележки

- Уверете се, че сте импортирали схемата на базата данни от файла `CommunityCenter.sql` ръчно или чрез монтиране с volume. 