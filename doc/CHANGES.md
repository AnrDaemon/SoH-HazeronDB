= $Id: CHANGES.md 52 2016-02-24 11:23:57Z anrdaemon $
------------------------------------------------------------------------
r50 | anrdaemon | 2016-02-24 14:16:33 +0300 (Ср, 24 фев 2016) | 2 lines

= Rename contract class. I mean... It's already in a separate namespace...

------------------------------------------------------------------------
r49 | anrdaemon | 2016-02-24 13:35:48 +0300 (Ср, 24 фев 2016) | 2 lines

- Crap.

------------------------------------------------------------------------
r48 | anrdaemon | 2016-02-24 04:54:59 +0300 (Ср, 24 фев 2016) | 2 lines

+ XML Parser implementation for SoH XML map dump.

------------------------------------------------------------------------
r47 | anrdaemon | 2016-02-24 04:53:03 +0300 (Ср, 24 фев 2016) | 2 lines

+ Dictionary/Galaxy - create a Galaxy instance from partial information.

------------------------------------------------------------------------
r46 | anrdaemon | 2016-02-24 04:50:48 +0300 (Ср, 24 фев 2016) | 2 lines

+ Useless whitespace change.

------------------------------------------------------------------------
r45 | anrdaemon | 2016-02-24 04:50:28 +0300 (Ср, 24 фев 2016) | 2 lines

+ Distance calculation between two points.

------------------------------------------------------------------------
r44 | anrdaemon | 2016-02-24 04:49:48 +0300 (Ср, 24 фев 2016) | 2 lines

* Tweak implicit setter call.

------------------------------------------------------------------------
r43 | anrdaemon | 2016-02-24 04:48:52 +0300 (Ср, 24 фев 2016) | 2 lines

- Fix coordinate typehint.

------------------------------------------------------------------------
r42 | anrdaemon | 2016-02-24 00:39:57 +0300 (Ср, 24 фев 2016) | 2 lines

. Fix debug wrapper.

------------------------------------------------------------------------
r41 | anrdaemon | 2016-02-24 00:39:12 +0300 (Ср, 24 фев 2016) | 4 lines

- Remove transactions - DDL statements can't be rolled back.
+ Galaxies dictionary.
* Single-line inserts.

------------------------------------------------------------------------
r40 | anrdaemon | 2016-02-23 23:51:37 +0300 (Вт, 23 фев 2016) | 4 lines

= Rename Registry class.
+ Starsystem done.
+ Children Registry for map objects.

------------------------------------------------------------------------
r39 | anrdaemon | 2016-02-23 23:46:05 +0300 (Вт, 23 фев 2016) | 2 lines

+ Search registry by name.

------------------------------------------------------------------------
r38 | anrdaemon | 2016-02-23 20:34:20 +0300 (Вт, 23 фев 2016) | 4 lines

+ Repository
+ Sectors for Galaxy
+ Systems for Sector

------------------------------------------------------------------------
r37 | anrdaemon | 2016-02-23 17:34:18 +0300 (Вт, 23 фев 2016) | 3 lines

= @version tag proper.
. Init.

------------------------------------------------------------------------
r36 | anrdaemon | 2016-02-23 17:28:47 +0300 (Вт, 23 фев 2016) | 3 lines

= @version tag proper.
+ U3 coordinate mapping compatibility.

------------------------------------------------------------------------
r35 | anrdaemon | 2016-02-23 17:28:01 +0300 (Вт, 23 фев 2016) | 3 lines

= @version tag proper.
+ Cast coordinates to float on store.

------------------------------------------------------------------------
r34 | anrdaemon | 2016-02-23 17:26:42 +0300 (Вт, 23 фев 2016) | 2 lines

+ Compatibility mode switch.

------------------------------------------------------------------------
r33 | anrdaemon | 2016-02-23 17:25:56 +0300 (Вт, 23 фев 2016) | 2 lines

+ @version tag proper.

------------------------------------------------------------------------
r32 | anrdaemon | 2016-02-23 13:51:50 +0300 (Вт, 23 фев 2016) | 3 lines

= Rename base coordinates class to better reflect its contents.
  SoH may work with polar coordinates too, you know.

------------------------------------------------------------------------
r31 | anrdaemon | 2016-02-23 13:37:01 +0300 (Вт, 23 фев 2016) | 4 lines

. Too much to remember.
* Tweak classes to a new paradigm.
- Fix namespaced calls.

------------------------------------------------------------------------
r30 | anrdaemon | 2016-02-23 13:09:22 +0300 (Вт, 23 фев 2016) | 2 lines

+ ITranslatable interface.

------------------------------------------------------------------------
r29 | anrdaemon | 2016-02-23 07:25:01 +0300 (Вт, 23 фев 2016) | 4 lines

+ Restructure for example files.
+ GPS coordinate template.
+ Better(tm) class loader.

------------------------------------------------------------------------
r28 | anrdaemon | 2016-02-23 05:23:12 +0300 (Вт, 23 фев 2016) | 2 lines

= Fix classes placement.

------------------------------------------------------------------------
r27 | anrdaemon | 2016-02-23 05:21:50 +0300 (Вт, 23 фев 2016) | 3 lines

+ Namespaces
= Fix inheritance.

------------------------------------------------------------------------
r26 | anrdaemon | 2015-09-15 06:31:34 +0300 (Вт, 15 сен 2015) | 2 lines

+ Star system.

------------------------------------------------------------------------
r25 | anrdaemon | 2015-09-15 05:58:06 +0300 (Вт, 15 сен 2015) | 3 lines

- Do away with custom exceptions for standard cases.
* Throw BadMethodCall for missing properties.

------------------------------------------------------------------------
r24 | anrdaemon | 2015-09-15 04:16:58 +0300 (Вт, 15 сен 2015) | 3 lines

+ Core startup for includes.
+ Ignores on directory.

------------------------------------------------------------------------
r23 | anrdaemon | 2015-09-15 04:13:17 +0300 (Вт, 15 сен 2015) | 2 lines

= Rewrite debug wrapper for lower dependency level.

------------------------------------------------------------------------
r22 | anrdaemon | 2015-09-15 04:12:18 +0300 (Вт, 15 сен 2015) | 2 lines

+ Initial set of classes.

------------------------------------------------------------------------
r21 | anrdaemon | 2015-09-15 04:09:36 +0300 (Вт, 15 сен 2015) | 3 lines

+ Sane connection options.
+ Correct PHP < 5.3.6 deficiency handling for MySQL case.

------------------------------------------------------------------------
r20 | anrdaemon | 2015-09-15 03:24:23 +0300 (Вт, 15 сен 2015) | 4 lines

- Class autoloader must not throw exceptions.
- It is not class autoloader's right to judge class name validity.
- Doesn't look like your class? Return false and carry on.

------------------------------------------------------------------------
r19 | anrdaemon | 2015-09-03 08:55:43 +0300 (Чт, 03 сен 2015) | 3 lines

+ Chunk import list.
+ Clarification on mapUniverse objType column.

------------------------------------------------------------------------
r18 | anrdaemon | 2015-09-03 08:38:33 +0300 (Чт, 03 сен 2015) | 4 lines

- Proper identifiers' quoting in views.
- Proper handling of object names in viewResources.
+ Galaxy in viewOwnership.

------------------------------------------------------------------------
r17 | anrdaemon | 2015-09-03 08:24:21 +0300 (Чт, 03 сен 2015) | 5 lines

+ Rename mapGalaxy to mapUniverse.
+ Galaxies dictionary.
+ Galaxy in universe map.
+ Galaxy in ownership view.

------------------------------------------------------------------------
r16 | anrdaemon | 2015-09-03 07:36:15 +0300 (Чт, 03 сен 2015) | 2 lines

= Rewrite viewOwnership for a more straight JOIN.

------------------------------------------------------------------------
r15 | anrdaemon | 2015-09-03 07:31:23 +0300 (Чт, 03 сен 2015) | 2 lines

* Meaningful field names for dctEmpires.

------------------------------------------------------------------------
r14 | anrdaemon | 2015-09-03 07:19:24 +0300 (Чт, 03 сен 2015) | 2 lines

- Whitespace cleanup #3

------------------------------------------------------------------------
r13 | anrdaemon | 2015-09-03 07:12:41 +0300 (Чт, 03 сен 2015) | 2 lines

= Put the name of dctMapTypes chunk in sync with its content.

------------------------------------------------------------------------
r12 | anrdaemon | 2015-09-03 07:11:13 +0300 (Чт, 03 сен 2015) | 3 lines

* Reorder celestials.
+ Add blackhole.

------------------------------------------------------------------------
r11 | anrdaemon | 2015-09-03 06:56:12 +0300 (Чт, 03 сен 2015) | 3 lines

- Remove now obsolete script.
- Fix lnkOwned chunk name.

------------------------------------------------------------------------
r10 | anrdaemon | 2015-09-03 06:41:37 +0300 (Чт, 03 сен 2015) | 3 lines

= Split bulk file into parts.
- Empty SQL statements removed.

------------------------------------------------------------------------
r9 | anrdaemon | 2015-09-03 01:14:32 +0300 (Чт, 03 сен 2015) | 3 lines

= Separate dctMapTypes.
- No autoincrement in static dictionary!

------------------------------------------------------------------------
r8 | anrdaemon | 2015-09-03 00:42:29 +0300 (Чт, 03 сен 2015) | 2 lines

- Database name/use cleanup. (Last one?)

------------------------------------------------------------------------
r7 | anrdaemon | 2015-09-03 00:39:56 +0300 (Чт, 03 сен 2015) | 2 lines

- Whitespace cleanup #2.

------------------------------------------------------------------------
r6 | anrdaemon | 2015-09-03 00:37:57 +0300 (Чт, 03 сен 2015) | 2 lines

- Whitespace cleanup #1.

------------------------------------------------------------------------
r5 | anrdaemon | 2015-09-03 00:36:16 +0300 (Чт, 03 сен 2015) | 3 lines

- Cleanup under assumption that we have a clean database.
- Removed references to a database name/use.

------------------------------------------------------------------------
r4 | anrdaemon | 2015-09-03 00:06:50 +0300 (Чт, 03 сен 2015) | 2 lines

- Fix classloader.

------------------------------------------------------------------------
r3 | anrdaemon | 2015-09-02 23:42:56 +0300 (Ср, 02 сен 2015) | 2 lines

* Typos and merged functionality in connector.

------------------------------------------------------------------------
r2 | anrdaemon | 2015-09-02 23:31:18 +0300 (Ср, 02 сен 2015) | 2 lines

+ Do-up the scheme.

------------------------------------------------------------------------
r1 | anrdaemon | 2011-11-05 00:54:11 +0400 (Сб, 05 ноя 2011) | 2 lines

. Initial import.

------------------------------------------------------------------------
