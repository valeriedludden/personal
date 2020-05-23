DROP TABLE book;
DROP TABLE location;
DROP TABLE author;
DROP TABLE genre;

CREATE TABLE public.location
(
	id SERIAL NOT NULL PRIMARY KEY,
	location VARCHAR(25) NOT NULL UNIQUE
);

CREATE TABLE public.author
(
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL
);
CREATE TABLE public.genre
(
	id SERIAL  NOT NULL PRIMARY KEY,
	genre VARCHAR(25) NOT NULL
);
CREATE TABLE public.book
(
	id SERIAL  NOT NULL PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	author INT NOT NULL REFERENCES public.author(id),
	genre INT NOT NULL REFERENCES public.genre(id),
	location INT NOT NULL REFERENCES public.location(id)
);

INSERT INTO location VALUES (DEFAULT,'Den-Left');
INSERT INTO location VALUES (DEFAULT,'Den-Right');
INSERT INTO location VALUES (DEFAULT,'Barrister-West');
INSERT INTO location VALUES (DEFAULT,'Barrister-East');
INSERT INTO location VALUES (DEFAULT,'Guest Bedroom');

INSERT INTO genre VALUES (DEFAULT,'mystery');
INSERT INTO genre VALUES (DEFAULT,'biography');
INSERT INTO genre VALUES (DEFAULT,'fiction');
INSERT INTO genre VALUES (DEFAULT,'action');
INSERT INTO genre VALUES (DEFAULT,'romance');
INSERT INTO genre VALUES (DEFAULT,'childrens');
INSERT INTO genre VALUES (DEFAULT,'cooking');
INSERT INTO genre VALUES (DEFAULT,'health');
INSERT INTO genre VALUES (DEFAULT,'history');
INSERT INTO genre VALUES (DEFAULT,'puzzles');

INSERT INTO author VALUES (DEFAULT,'AUSTEN, JANE');
INSERT INTO author VALUES (DEFAULT,'HEYER, GEORGETTE');

INSERT INTO book (id, title, author, genre, location) VALUES (DEFAULT, 'EMMA',1,4,1);
INSERT INTO book (id, title, author, genre, location) VALUES (DEFAULT,'BLACK SHEEP',2,7,2);



