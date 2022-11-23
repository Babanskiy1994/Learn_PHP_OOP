<?php

/* SOLID — мнемонический акроним, введённый Майклом Фэзерсом (Michael Feathers) для первых пяти принципов, названных Робертом Мартином в начале 2000-х, которые означали пять основных принципов объектно-ориентированного программирования и проектирования. */



/* S - Принцип единственной ответственности */
// При возникновении изменения должен затрагиваться только один класс


/* O - Принцип Открытости/Закрытости */
// Классы должны быть открыты для расширения и закрыты для модификации . получение маршрутки. получение чека


/* L - Принцип подстановки Барбары Лисков */
// Необходимо чтобы подклассы могли служить заменой для своих суперклассов
// Поведение наследующих классов не должно противоречить поведению заданному базовым классом


/* I - Принцип разделения интерфейсов */
// Cущности не должны зависеть от интерфейсов, которые они не используют


/* D - Принцип инверсии зависимостей */
// Верхнеуровневые сущности не должны зависить от нижнеуровневых реализаций а любые зависимости лучше выносить в абстракции