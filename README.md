# formation


POUR L'EVALUATION, voici les requêtes SQL

SCRIPT SQL Création BDD


CREATE TABLE formation(
   id INT,
   prenom VARCHAR(50),
   nom VARCHAR(50),
   message VARCHAR(500),
   PRIMARY KEY(id)
);

INSERT INTO `formation`(`id`, `prenom`, `nom`, `message`) VALUES ([value-1],[value-2],[value-3],[value-4])-

SELECT `id`, `prenom`, `nom`, `message` FROM `formation` WHERE 1

UPDATE `formation` SET `id`=[value-1],`prenom`=[value-2],`nom`=[value-3],`message`=[value-4] WHERE 1

DELETE FROM `formation` WHERE 0
