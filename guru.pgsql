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
    nm_guru character varying NOT NULL,
    tgl_lahir date NOT NULL,
    status character varying NOT NULL,
    jk character varying NOT NULL,
    pendidikan character varying NOT NULL,
    pass_guru character varying NOT NULL
);


ALTER TABLE public."Guru" OWNER TO afrgun;

--
-- Data for Name: Guru; Type: TABLE DATA; Schema: public; Owner: afrgun
--

COPY public."Guru" (kd_guru, nm_guru, tgl_lahir, status, jk, pendidikan, pass_guru) FROM stdin;
20104D18	wew	2000-09-11	Guru Kelas	P	S1	123456
20102D15	lolt	1950-05-11	Guru Mapel	P	S2	123456
1234567D	tolp	1987-03-22	Guru Mapel	L	S2	123456
30104Q10	Nisas	1980-09-09	Guru Mapel	P	S2	123456
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

