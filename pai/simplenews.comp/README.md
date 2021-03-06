# Мой компонент новостей - Тестовое задание

## Разработать простой компонент «Список новостей» на D7
### Общие требования
> У созданного компонента задать код: simplenews.comp, название: «Мой компонент новостей», раздел для отображения компонента в визуальном редакторе: «Тестовое задание». 
### Решаемая задача
* Компонент должен выводить список новостей и табы по годам на основе добавленных новостей.
* По умолчания нужно показывать ближайшего года.
* Должна быть реализована постраничная навигация.
* Реализация должна быть с минимум вёрстки.
* Должно быть реализовано кеширование выводимых новостей.
### Технические требования
* Использовать при решении старый метод GetList (не D7) допустимо, но не желательно.
* Реализация компонента должна быть в формате D7.
* Компонент должен иметь только такие параметры:
* ID инфоблока новостей, строка.
* Число новостей на 1-ой странице.
* Типовые настройки кеширования: авто+управляемое, кешировать, не кешировать, и время кеширования.
* Выбор шаблона.
* Условия кеширования результата работы компонента - по умолчанию, не зависит от дополнительных данных.
### Инфоблоки, получаемые данные
Используемые в шаблоне данные новостей:
* Поля: название, дата, описание для анонса, фото.
* Должны выбираться только активные элементы.
* Сортировка по дате с убыванием.
### Установка заголовка страницы
* В компоненте устанавливать заголовок страницы: «Список новостей (XX шт.) где XX – число выбранных за активный год.
* Заголовок должен устанавливаться в файле component.php. Этот функционал является логикой компонента и не должен «теряться» при смене шаблона.
### Отображение данных
* Табы с годами, при клике на который, идёт переход на нужный год.
* Плитка новостей с полями.
* Постраничная навигация.