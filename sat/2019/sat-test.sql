CREATE TABLE mytable(
   button                   VARCHAR(30)
  ,id                       INTEGER  NOT NULL PRIMARY KEY
  ,district                 VARCHAR(38) NOT NULL
  ,school                   VARCHAR(50) NOT NULL
  ,test                     VARCHAR(4) NOT NULL
  ,grade                    INTEGER  NOT NULL
  ,participationRate        NUMERIC(4,1)
  ,totalScoreMean           INTEGER 
  ,readingWritingMean       INTEGER 
  ,mathematicsMean          INTEGER 
  ,totalScoreMeanChange     INTEGER 
  ,readingWritingMeanChange INTEGER 
  ,mathematicsMeanChange    INTEGER 
);
INSERT INTO mytable(button,id,district,school,test,grade,participationRate,totalScoreMean,readingWritingMean,mathematicsMean,totalScoreMeanChange,readingWritingMeanChange,mathematicsMeanChange) VALUES (NULL,1,'All Districts','All Schools','PSAT',9,93.4,906,457,448,4,3,0);