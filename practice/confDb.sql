DROP TABLE note;
DROP TABLE public.users;
DROP TABLE speaker;
DROP TABLE conference;

CREATE TABLE public.users
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);
CREATE TABLE public.speaker
(
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL
);

CREATE TABLE public.conference
(
	id SERIAL NOT NULL PRIMARY KEY,
	year SMALLINT NOT NULL,
	is_spring BOOLEAN NOT NULL
);
CREATE TABLE public.note
(
	id SERIAL  NOT NULL PRIMARY KEY,
	user_id INT NOT NULL REFERENCES public.users(id),
	speaker_id INT NOT NULL REFERENCES public.speaker(id),
	conference_id INT NOT NULL REFERENCES public.conference(id),
	note_text TEXT NOT NULL
);

INSERT INTO speaker VALUES (DEFAULT,'Uch');
INSERT INTO speaker VALUES (DEFAULT,'Oak');
INSERT INTO speaker VALUES (DEFAULT,'Nelson');
INSERT INTO speaker VALUES (DEFAULT,'Bednar');

INSERT INTO conference VALUES (DEFAULT, 2002, true);
INSERT INTO conference VALUES (DEFAULT,2003, false);
INSERT INTO conference VALUES (DEFAULT,2004, true);
INSERT INTO conference VALUES (DEFAULT,2005, false);

INSERT INTO users VALUES (DEFAULT,'val', 'val', 'val');
INSERT INTO users VALUES (DEFAULT,'sal', 'sal', 'sal');
INSERT INTO users VALUES (DEFAULT,'dal', 'dal', 'dal');
INSERT INTO users VALUES (DEFAULT,'fal', 'fal', 'fal');


INSERT INTO note VALUES (DEFAULT,1, 1, 1,'val');
INSERT INTO note VALUES (DEFAULT,2, 2, 2,'sal');
INSERT INTO note VALUES (DEFAULT,2, 1, 3,'tal');
INSERT INTO note VALUES (DEFAULT,3, 3, 4,'dal');
INSERT INTO note VALUES (DEFAULT,4, 2, 1,'dal');