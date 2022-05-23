CREATE TABLE `tarefas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo_tarefa` varchar(40) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `feito` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
