create table servicos ( 
    id int AUTO_INCREMENT PRIMARY key, 
    nome varchar(250) not null, 
    descricao varchar(500) not null, 
    preco double not null );

INSERT INTO 
    `servicos`(`nome`, `descricao`, `preco`)
VALUES 
    ('Corte de Cabelo','Transforme seu visual com um corte moderno.', 140), 
    ('Escova', 'Cabelos lisos e sedosos em poucos minutos!', 70), 
    ('luzes', 'Realce sua beleza com mechas luminosas.', 180), 
    ('Entrelace', 'Tenha cabelos longos e volumosos em instantes.', 100), 
    ('Coloração', 'Experimente novas cores e realce sua beleza.', 180), 
    ('Peteado Festa', 'Arrase na festa com um penteado elegante.', 100), 
    ('Selagem','Tenha cabelos hidratados e com menos frizz.', 200);
