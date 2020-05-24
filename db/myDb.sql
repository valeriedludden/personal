-- DROP TABLE book;
-- DROP TABLE location;
-- DROP TABLE author;
-- DROP TABLE genre;
--
-- CREATE TABLE public.location
-- (
-- 	id SERIAL NOT NULL PRIMARY KEY,
-- 	location VARCHAR(25) NOT NULL UNIQUE
-- );
--
-- CREATE TABLE public.author
-- (
-- 	id SERIAL NOT NULL PRIMARY KEY,
-- 	name VARCHAR(100) NOT NULL
-- );
-- CREATE TABLE public.genre
-- (
-- 	id SERIAL  NOT NULL PRIMARY KEY,
-- 	genre VARCHAR(25) NOT NULL
-- );
-- CREATE TABLE public.book
-- (
-- 	id SERIAL  NOT NULL PRIMARY KEY,
-- 	title VARCHAR(100) NOT NULL,
-- 	author INT NOT NULL REFERENCES public.author(id),
-- 	genre INT NOT NULL REFERENCES public.genre(id),
-- 	location INT NOT NULL REFERENCES public.location(id)
-- );
--
-- INSERT INTO location VALUES (DEFAULT,'Den-Left');
-- INSERT INTO location VALUES (DEFAULT,'Den-Right');
-- INSERT INTO location VALUES (DEFAULT,'Barrister-West');
-- INSERT INTO location VALUES (DEFAULT,'Barrister-East');
-- INSERT INTO location VALUES (DEFAULT,'Guest Bedroom');
--
-- INSERT INTO genre VALUES (DEFAULT,'Comedy');
-- INSERT INTO genre VALUES (DEFAULT,'Biography');
-- INSERT INTO genre VALUES (DEFAULT,'Fiction');
-- INSERT INTO genre VALUES (DEFAULT,'Travel');
-- INSERT INTO genre VALUES (DEFAULT,'Art');
-- INSERT INTO genre VALUES (DEFAULT,'Children Books');
-- INSERT INTO genre VALUES (DEFAULT,'Cooking');
-- INSERT INTO genre VALUES (DEFAULT,'Health');
-- INSERT INTO genre VALUES (DEFAULT,'History');
-- INSERT INTO genre VALUES (DEFAULT,'Puzzles');
-- INSERT INTO genre VALUES (DEFAULT,'Home & Garden');
-- INSERT INTO genre VALUES (DEFAULT,'Poems');
-- INSERT INTO genre VALUES (DEFAULT,'Self-Improvement');
-- INSERT INTO genre VALUES (DEFAULT,'Animals & Nature');
--
-- INSERT INTO author VALUES (DEFAULT,'AAA');
-- INSERT INTO author VALUES (DEFAULT,'ADKINS, ROY & LESLEY');
-- INSERT INTO author VALUES (DEFAULT,'ALWAYS,  JONATHAN');
-- INSERT INTO author VALUES (DEFAULT,'ANDREWS, JULIE');
-- INSERT INTO author VALUES (DEFAULT,'ARIAS, RON');
-- INSERT INTO author VALUES (DEFAULT,'ATTENBOROUGH, DAVID');
-- INSERT INTO author VALUES (DEFAULT,'AUEL, JEAN M.');
-- INSERT INTO author VALUES (DEFAULT,'AUSTEN, JANE');
-- INSERT INTO author VALUES (DEFAULT,'AZ-SONORA DESERT MUSEUM');
-- INSERT INTO author VALUES (DEFAULT,'BACH, RICHARD');
-- INSERT INTO author VALUES (DEFAULT,'BENCE-JONES, MARK');
-- INSERT INTO author VALUES (DEFAULT,'BENNETT, WM. J.');
-- INSERT INTO author VALUES (DEFAULT,'BERGAN, RONALD');
-- INSERT INTO author VALUES (DEFAULT,'BICKNELL & PAGE, JOANNA & NICK');
-- INSERT INTO author VALUES (DEFAULT,'BILL BRYSON');
-- INSERT INTO author VALUES (DEFAULT,'BLACK, JEREMY');
-- INSERT INTO author VALUES (DEFAULT,'BLANDING, DON');
-- INSERT INTO author VALUES (DEFAULT,'BRADFORD, SARAH');
-- INSERT INTO author VALUES (DEFAULT,'BROKAW, TOM');
-- INSERT INTO author VALUES (DEFAULT,'BRONTE, ANNE');
-- INSERT INTO author VALUES (DEFAULT,'BRONTE, CHARLOTTE');
-- INSERT INTO author VALUES (DEFAULT,'BRONTE, EMILY');
-- INSERT INTO author VALUES (DEFAULT,'BRYSON, GILL');
-- INSERT INTO author VALUES (DEFAULT,'BUSH, GEORGE W.');
-- INSERT INTO author VALUES (DEFAULT,'BYRDE, PENELOPE');
-- INSERT INTO author VALUES (DEFAULT,'CALDWELL TAYLOR');
-- INSERT INTO author VALUES (DEFAULT,'CARLSON, RICHARD [ph.d]');
-- INSERT INTO author VALUES (DEFAULT,'CARROLL, LESLIE');
-- INSERT INTO author VALUES (DEFAULT,'CARTER, JIMMY');
-- INSERT INTO author VALUES (DEFAULT,'CHILD, LEE');
-- INSERT INTO author VALUES (DEFAULT,'CHILDS, CRAIG');
-- INSERT INTO author VALUES (DEFAULT,'CHRISTIE, AGATHA');
-- INSERT INTO author VALUES (DEFAULT,'CLASSIC');
-- INSERT INTO author VALUES (DEFAULT,'CLWYD');
-- INSERT INTO author VALUES (DEFAULT,'COBB, VICKI');
-- INSERT INTO author VALUES (DEFAULT,'CONNEY, BARBARA');
-- INSERT INTO author VALUES (DEFAULT,'CONSUMER REPORTS');
-- INSERT INTO author VALUES (DEFAULT,'COUNTESS OF CARNARVON');
-- INSERT INTO author VALUES (DEFAULT,'COVEY, STEVEN R.');
-- INSERT INTO author VALUES (DEFAULT,'COVINGTON JR, HOWARD E.');
-- INSERT INTO author VALUES (DEFAULT,'CRAYOLA');
-- INSERT INTO author VALUES (DEFAULT,'DE LOS SANTOS, MARISA');
-- INSERT INTO author VALUES (DEFAULT,'DEARY, TERRY');
-- INSERT INTO author VALUES (DEFAULT,'DELDERFIELD, ERIC R.');
-- INSERT INTO author VALUES (DEFAULT,'DEWBERRY, DONNA');
-- INSERT INTO author VALUES (DEFAULT,'DISNEY');
-- INSERT INTO author VALUES (DEFAULT,'DR. SEUSS');
-- INSERT INTO author VALUES (DEFAULT,'ELIOT, GEORGE');
-- INSERT INTO author VALUES (DEFAULT,'ENGLAND / WITNEY, OXFORD');
-- INSERT INTO author VALUES (DEFAULT,'ENGLISH HERITAGE');
-- INSERT INTO author VALUES (DEFAULT,'EVANS, RICHARD PAUL');
-- INSERT INTO author VALUES (DEFAULT,'FAIRVIEW REFORMED CHURCH');
-- INSERT INTO author VALUES (DEFAULT,'FAIRVIEW, MONICA');
-- INSERT INTO author VALUES (DEFAULT,'FELLOWES, JESSICA');
-- INSERT INTO author VALUES (DEFAULT,'FIFER, BARBARA');
-- INSERT INTO author VALUES (DEFAULT,'FILEY, JAMES WHITCOMB');
-- INSERT INTO author VALUES (DEFAULT,'FLAGG, FANNIE');
-- INSERT INTO author VALUES (DEFAULT,'FLYNN, VINCE');
-- INSERT INTO author VALUES (DEFAULT,'FORSTER, E.M.');
-- INSERT INTO author VALUES (DEFAULT,'FROST, ROBERT');
-- INSERT INTO author VALUES (DEFAULT,'GARDNER, ERLE STANLEY');
-- INSERT INTO author VALUES (DEFAULT,'GARNER');
-- INSERT INTO author VALUES (DEFAULT,'GARNER, VALERIE');
-- INSERT INTO author VALUES (DEFAULT,'GIES, FRANCES & JOSEPH');
-- INSERT INTO author VALUES (DEFAULT,'GOODWIN, DORIS KEARNS');
-- INSERT INTO author VALUES (DEFAULT,'GRAHAME, KENNETH');
-- INSERT INTO author VALUES (DEFAULT,'GRAY, DONNA');
-- INSERT INTO author VALUES (DEFAULT,'GREGORY, FAY');
-- INSERT INTO author VALUES (DEFAULT,'GREY, ZANE');
-- INSERT INTO author VALUES (DEFAULT,'GRISHAM, JOHN');
-- INSERT INTO author VALUES (DEFAULT,'GUERNEY, JAMES');
-- INSERT INTO author VALUES (DEFAULT,'GUINNESS');
-- INSERT INTO author VALUES (DEFAULT,'GUTERSON, DAVID');
-- INSERT INTO author VALUES (DEFAULT,'HALEY, ALEX');
-- INSERT INTO author VALUES (DEFAULT,'HARDY, THOMAS');
-- INSERT INTO author VALUES (DEFAULT,'HARRIOT, JAMES');
-- INSERT INTO author VALUES (DEFAULT,'HARRISON, SUE');
-- INSERT INTO author VALUES (DEFAULT,'HAWTHORNE, NATHANIAL');
-- INSERT INTO author VALUES (DEFAULT,'HEINRICH, CHRISTOPH');
-- INSERT INTO author VALUES (DEFAULT,'HELPRIN, MARK');
-- INSERT INTO author VALUES (DEFAULT,'HENRY, MARGUERITE');
-- INSERT INTO author VALUES (DEFAULT,'HEYER, GEORGETTE');
-- INSERT INTO author VALUES (DEFAULT,'HOBAN, LILLIAN');
-- INSERT INTO author VALUES (DEFAULT,'IRISH, MARY');
-- INSERT INTO author VALUES (DEFAULT,'ISAACSON, WALTER');
-- INSERT INTO author VALUES (DEFAULT,'JONES, WARREN');
-- INSERT INTO author VALUES (DEFAULT,'KARON, JAN');
-- INSERT INTO author VALUES (DEFAULT,'KAYE, M.M.');
-- INSERT INTO author VALUES (DEFAULT,'KEENE, CAROLYN');
-- INSERT INTO author VALUES (DEFAULT,'KIDD, SUE MONK');
-- INSERT INTO author VALUES (DEFAULT,'KIERNAN, DENISE');
-- INSERT INTO author VALUES (DEFAULT,'KINCAID, THOMAS');
-- INSERT INTO author VALUES (DEFAULT,'KINGSOLVER, BARBARA');
-- INSERT INTO author VALUES (DEFAULT,'KIPLING, RUDYARD');
-- INSERT INTO author VALUES (DEFAULT,'LEROUX, GASTON');
-- INSERT INTO author VALUES (DEFAULT,'LIFE MAGAZINE');
-- INSERT INTO author VALUES (DEFAULT,'LINDGREN, ASTRID');
-- INSERT INTO author VALUES (DEFAULT,'LITTLE GOLDEN BOOK');
-- INSERT INTO author VALUES (DEFAULT,'LOBEL, ARNOLD');
-- INSERT INTO author VALUES (DEFAULT,'LONDON, JACK');
-- INSERT INTO author VALUES (DEFAULT,'LONELY PLANET');
-- INSERT INTO author VALUES (DEFAULT,'LONGFELLOW, HENRY WADSWORTH');
-- INSERT INTO author VALUES (DEFAULT,'LORD MONTAGU OF BEAULIEU');
-- INSERT INTO author VALUES (DEFAULT,'MARKLE, SANDRA');
-- INSERT INTO author VALUES (DEFAULT,'MARTEL, YANN');
-- INSERT INTO author VALUES (DEFAULT,'MARTIN & MARTIN');
-- INSERT INTO author VALUES (DEFAULT,'MC MAUGHTON, COLIN');
-- INSERT INTO author VALUES (DEFAULT,'MILLARD, CANDICE');
-- INSERT INTO author VALUES (DEFAULT,'MILLMAN');
-- INSERT INTO author VALUES (DEFAULT,'MITCHELL, MARGARET');
-- INSERT INTO author VALUES (DEFAULT,'MOELLER, BILL & JAN');
-- INSERT INTO author VALUES (DEFAULT,'MOLLY MAID');
-- INSERT INTO author VALUES (DEFAULT,'MONTGOMERY, L.M.');
-- INSERT INTO author VALUES (DEFAULT,'MONTGOMERY, LUCY MAUD');
-- INSERT INTO author VALUES (DEFAULT,'MORTENSON & RELIN');
-- INSERT INTO author VALUES (DEFAULT,'MUIR, FRANK');
-- INSERT INTO author VALUES (DEFAULT,'MUNSCH, ROBERT');
-- INSERT INTO author VALUES (DEFAULT,'NATIONAL GEOGRAPHIC GUIDE');
-- INSERT INTO author VALUES (DEFAULT,'NEIDER, CHARLES  (EDITOR)');
-- INSERT INTO author VALUES (DEFAULT,'NEILLANDS, ROB');
-- INSERT INTO author VALUES (DEFAULT,'NIFFENEGGER, AUDREY');
-- INSERT INTO author VALUES (DEFAULT, 'O HENRY');
-- INSERT INTO author VALUES (DEFAULT,'PARKER, TOM');
-- INSERT INTO author VALUES (DEFAULT,'PAT, B   &   THOMPSON, J');
-- INSERT INTO author VALUES (DEFAULT,'PATTERSON, JAMES');
-- INSERT INTO author VALUES (DEFAULT,'PEARS, IAIN');
-- INSERT INTO author VALUES (DEFAULT,'PECK, RICHARD');
-- INSERT INTO author VALUES (DEFAULT,'PENMAN, SHARON KAY');
-- INSERT INTO author VALUES (DEFAULT,'PHILLIPS, GERALD');
-- INSERT INTO author VALUES (DEFAULT,'PITKIN GUIDES');
-- INSERT INTO author VALUES (DEFAULT,'POST, ELIZABETH L.');
-- INSERT INTO author VALUES (DEFAULT,'POTTER, BEATRICE');
-- INSERT INTO author VALUES (DEFAULT,'QUANTE, DON');
-- INSERT INTO author VALUES (DEFAULT,'QUEEN, ELLERY');
-- INSERT INTO author VALUES (DEFAULT,'RAND MC NALLY');
-- INSERT INTO author VALUES (DEFAULT,'RANDOM HOUSE');
-- INSERT INTO author VALUES (DEFAULT,'READERS DIGEST');
-- INSERT INTO author VALUES (DEFAULT,'REICHL, RUTH');
-- INSERT INTO author VALUES (DEFAULT,'ROBERTS, COKIE');
-- INSERT INTO author VALUES (DEFAULT,'ROHINTON MISTRY');
-- INSERT INTO author VALUES (DEFAULT,'ROTHENBERG, REBECCA');
-- INSERT INTO author VALUES (DEFAULT,'RUTHERFURD, EDWARD');
-- INSERT INTO author VALUES (DEFAULT,'SARABANDE, WILLIAM');
-- INSERT INTO author VALUES (DEFAULT,'SCOTT, SIR WALTER');
-- INSERT INTO author VALUES (DEFAULT,'SEARS');
-- INSERT INTO author VALUES (DEFAULT,'SEDGWICK, ANN DOUGLAS');
-- INSERT INTO author VALUES (DEFAULT,'SERLING, ROBERT J.');
-- INSERT INTO author VALUES (DEFAULT,'SLATER & BASCH, SHIRLEY & HARRY');
-- INSERT INTO author VALUES (DEFAULT,'SLAYBAUGH, THOMAS JACKSON');
-- INSERT INTO author VALUES (DEFAULT,'SPENCER, CHARLES');
-- INSERT INTO author VALUES (DEFAULT,'STEINBECK, JOHN');
-- INSERT INTO author VALUES (DEFAULT,'STEVENSON, ROBERT LOUIS');
-- INSERT INTO author VALUES (DEFAULT,'STEVES, RICK');
-- INSERT INTO author VALUES (DEFAULT,'STEWART, JON');
-- INSERT INTO author VALUES (DEFAULT,'STONE, IRVING');
-- INSERT INTO author VALUES (DEFAULT,'SUNSET');
-- INSERT INTO author VALUES (DEFAULT,'SYNYARD, NEAL');
-- INSERT INTO author VALUES (DEFAULT,'THOM, JAMES ALEXANDER');
-- INSERT INTO author VALUES (DEFAULT,'THOMAS, ROGER');
-- INSERT INTO author VALUES (DEFAULT,'TIERNEY, TOM');
-- INSERT INTO author VALUES (DEFAULT,'TIME / CBS NEWS');
-- INSERT INTO author VALUES (DEFAULT,'TRAPP, MARIA AUGUSTA');
-- INSERT INTO author VALUES (DEFAULT,'TRUMAN, MARGARET');
-- INSERT INTO author VALUES (DEFAULT,'UNICHROME PUBLICATION');
-- INSERT INTO author VALUES (DEFAULT,'UNKNOWN');
-- INSERT INTO author VALUES (DEFAULT,'URBANSKA & LEVERING');
-- INSERT INTO author VALUES (DEFAULT,'VEREY, ROSEMARY');
-- INSERT INTO author VALUES (DEFAULT,'VOLKMANN, ROY');
-- INSERT INTO author VALUES (DEFAULT,'WALDO, ANNA LEE');
-- INSERT INTO author VALUES (DEFAULT,'WALKER, STEVEN L.');
-- INSERT INTO author VALUES (DEFAULT,'WEINER, JONATHAN');
-- INSERT INTO author VALUES (DEFAULT,'WEIR, ALISON');
-- INSERT INTO author VALUES (DEFAULT,'WELLS, H. G.');
-- INSERT INTO author VALUES (DEFAULT,'WHITE, PHIL & CAROL');
-- INSERT INTO author VALUES (DEFAULT,'WIGGIN, KATE DOUGLAS');
-- INSERT INTO author VALUES (DEFAULT,'WILLIAMS, MARGERY');
-- INSERT INTO author VALUES (DEFAULT,'YORK, ROBERT');



INSERT INTO book (id, title, author, genre, location) VALUES (DEFAULT, 'EMMA',1,4,1);
INSERT INTO book (id, title, author, genre, location) VALUES (DEFAULT,'BLACK SHEEP',1,7,2);
INSERT INTO book (id, title, author, genre, location) VALUES (DEFAULT,' SHEEP',1,7,2);
INSERT INTO book (id, title, author, genre, location) VALUES (DEFAULT,'BLACK ',2,7,2);



