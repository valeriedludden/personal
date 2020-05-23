-- Table: public."Scriptures"
​
-- DROP TABLE public."Scriptures";
​
CREATE TABLE public."Scriptures"
(
"idScript" bigint NOT NULL DEFAULT nextval('"Scriptures_idScript_seq"'::regclass),
book character varying(50) COLLATE pg_catalog."default" NOT NULL,
chapter integer NOT NULL,
verse integer NOT NULL,
content character varying(1024) COLLATE pg_catalog."default" NOT NULL,
CONSTRAINT "Scriptures_pkey" PRIMARY KEY ("idScript")
)
​
TABLESPACE pg_default;
​
ALTER TABLE public."Scriptures"
OWNER to postgres;


INSERT INTO public."Scriptures"(book, chapter, verse, content)
	VALUES ("John",1,5,"If any man lack wisdom...");
INSERT INTO public."Scriptures"(book, chapter, verse, content)
	VALUES ("Doctrine and Covenants",88,49,"Light shineth in darkness...");
INSERT INTO public."Scriptures"(book, chapter, verse, content)
	VALUES ("Doctrine and Covenants",93,28,"He that keepeth his commandments...");
INSERT INTO public."Scriptures"(book, chapter, verse, content)
	VALUES ("Mosiah",16,9,"He is the light and the life of the world...");

