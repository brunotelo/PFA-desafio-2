USE db-php;

CREATE TABLE modulos (
    id int(3) auto_increment primary key,
    nome varchar(200) not null
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

INSERT INTO modulos (nome) VALUES ('Docker');
INSERT INTO modulos (nome) VALUES ('Padrões e Técnicas avançadas com GIT e GITHUB');
INSERT INTO modulos (nome) VALUES ('Integração contínua');
INSERT INTO modulos (nome) VALUES ('Kubernetes');

