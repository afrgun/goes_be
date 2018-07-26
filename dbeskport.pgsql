--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.13
-- Dumped by pg_dump version 9.5.13

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: Guru; Type: TABLE; Schema: public; Owner: afrgun
--

CREATE TABLE public."Guru" (
    kd_guru character(8) NOT NULL,
    nm_guru character(50) NOT NULL,
    tgl_lahir date NOT NULL,
    status character(20) NOT NULL,
    jk character(2) NOT NULL,
    pendidikan character(2) NOT NULL,
    pass_guru character varying(32) NOT NULL
);


ALTER TABLE public."Guru" OWNER TO afrgun;

--
-- Data for Name: Guru; Type: TABLE DATA; Schema: public; Owner: afrgun
--

COPY public."Guru" (kd_guru, nm_guru, tgl_lahir, status, jk, pendidikan, pass_guru) FROM stdin;
20904D10	werq                                              	1956-09-11	Guru Mapel          	P 	S1	123456
20104D18	werq                                              	2000-09-11	Guru Mapel          	P 	S1	123456
1234567D	tolp                                              	1987-03-22	Guru Mapel          	P 	S1	123456
20102D15	lolt                                              	1950-05-11	Guru Mapel          	P 	S1	123456
20104400	qeri                                              	1999-09-22	Guru Mapel          	P 	S1	123456
50104C04	werq                                              	1980-12-12	Guru Mapel          	P 	S1	123456
50104C09	yuyu                                              	1956-09-11	Guru Mapel          	P 	S1	123456
50104C03	tuti                                              	1987-02-11	Guru Mapel          	P 	S1	123456
20104Q10	werq                                              	1956-09-11	Guru Mapel          	P 	S1	123456
\.


--
-- Name: Guru_pkey; Type: CONSTRAINT; Schema: public; Owner: afrgun
--

ALTER TABLE ONLY public."Guru"
    ADD CONSTRAINT "Guru_pkey" PRIMARY KEY (kd_guru);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

