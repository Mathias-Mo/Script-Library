<?php

/*

//basedata.php
$codes = array(
       "a"=>array(
        "a"=>array(
            "a"=>"lys",
            "c"=>"asn",
            "g"=>"lys",
            "u"=>"asn"
        ),
        "c"=>array(
            "a"=>"thr",
            "c"=>"thr",
            "g"=>"thr",
            "u"=>"thr"
        ),
        "g"=>array(
            "a"=>"arg",
            "c"=>"ser",
            "g"=>"arg",
            "u"=>"ser"
        ),
        "u"=>array(
            "a"=>"ile",
            "c"=>"ile",
            "g"=>"start",
            "u"=>"ile"
        )
    ),
    "c"=>array(
        "a"=>array(
            "a"=>"gln",
            "c"=>"his",
            "g"=>"gln",
            "u"=>"his"
        ),
        "c"=>array(
            "a"=>"pro",
            "c"=>"pro",
            "g"=>"pro",
            "u"=>"pro"
        ),
        "g"=>array(
            "a"=>"arg",
            "c"=>"arg",
            "g"=>"arg",
            "u"=>"arg"
        ),
        "u"=>array(
            "a"=>"leu",
            "c"=>"leu",
            "g"=>"leu",
            "u"=>"leu"
        )
    ),
    "g"=>array(
        "a"=>array(
            "a"=>"glu",
            "c"=>"asp",
            "g"=>"glu",
            "u"=>"asp"
        ),
        "c"=>array(
            "a"=>"ala",
            "c"=>"ala",
            "g"=>"ala",
            "u"=>"ala"
        ),
        "g"=>array(
            "a"=>"gly",
            "c"=>"gly",
            "g"=>"gly",
            "u"=>"gly"
        ),
        "u"=>array(
            "a"=>"val",
            "c"=>"val",
            "g"=>"val",
            "u"=>"val"
        )
    ),
    "u"=>array(
        "a"=>array(
            "a"=>"stop",
            "c"=>"tyr",
            "g"=>"stop",
            "u"=>"tyr"
        ),
        "c"=>array(
            "a"=>"ser",
            "c"=>"ser",
            "g"=>"ser",
            "u"=>"ser"
        ),
        "g"=>array(
            "a"=>"stop",
            "c"=>"cys",
            "g"=>"trp",
            "u"=>"cys"
        ),
        "u"=>array(
            "a"=>"leu",
            "c"=>"phe",
            "g"=>"leu",
            "u"=>"phe"
        )
    )
);

//sq_dna.php
$dna_sequence="ttaaaaataagctaataaaagcttttgggttcataccccaactataaaggaaataccttt
tttttaaaaataaagtgcctgaaaaaagggttattctgataggataaataatgtaattaa
aattacctttattatattttatagaattaaactatatcttttaacatcaaaaattaatgt
gcatcttacactaaaatataatatttatataaagaatttatatttctattaaattattat
aattattttatatattataccaaataaattctaataagatattttttatatttattttat
ttttcagaacaataatttcaatttcttcaaattcatgatttggatgttgaattggattag
aaattaatcttataagatttattcctttaatttctaaatcaaataatttattagcttctg
aagcagctttaaaatattttcttactcaatctattgcatcaattaatttcttattttaca
ttattataaaaataattttatttaaaaattttgaaatcaataatattatctcaataataa
ttaattcatcaatattaataaaaataggagctgctccttttcacttttgattccctaaca
ttgtagaaggactatcttgatttaataattttattttaataacatgacaaaaaattaccc
ctataattttattatcatattattttaataaaaatttattaatttttagaattttattaa
gaattattatcggagctattggaggattaaatcaaacatctttacgaaaaataatagctt
tttcctcaattaataatttaggttgacttatttcttcaattataatcagagaaaatttat
gatttttttatttatttatatactcttttttaattagaattatatgtttttttttttatt
ttataaactcatattttattaatcaattatttattacaaatatcaaaccaataattaaac
ttaaaatattaattaattttttatctttaggaggtttacctccttttattggattttttc
ctaaatgaattatcattaattttttaataattaacaatttttattttataacatttattt
ttattataataagattaatcatattatttttttacatacgaattatttattcttccttca
taataaattattttaaaataaaatgattaaaaattaattttaaaaataatttattttcaa
ttttaaattttttttcaattttatcaattttaggtcttatcttaagaactataatttttt
tttaaataaagattataaggttttaagttaaatttaaactagtaatcttcaaaattattt
ataaagaatatcatctttaagccttaataataattaaattataacttaaaatttgcaatt
ttatatcattttttgaatataaagctttaatttataataataaaagagaataattctcgt
taataaatttacaatttatcgcttaaatctcagccattttattttgcgaaaatgactata
ttcaacaaatcataaagatattggaacattatattttatttttggaatttgagctgggat
agtaggaacttcattaagattattaattcgagcagaattaggtaatccagggtcattaat
tggggatgatcaaatttataatactattgtaacagcccatgcttttattataattttttt
tatagttatacctattataattgggggatttggaaattgattagtacctttaatattagg
ggcacctgatatagcttttcctcgaataaataacataagattttgattacttccaccttc
aattactcttttaatttctagaagaattgtagaaaatggggcaggaactggatgaacagt
atatcctcctttatcttcaaatattgcccatggaggaagttctgttgatctagctatttt
ttctttacatctagctggtatctcttcaattttaggagctattaattttattacaacaat
tattaatatacgattaaataatatatcatttgatcaaatgcctttatttgtttgagctgt
aggaattactgcatttttattattattatctttaccagttttagcaggagctattactat
attattaacagatcgaaatttaaatacatcattttttgaccccgctggaggaggagatcc
tatcttatatcaacatttattttgattctttggacatcctgaagtttatattttaattct
acctgtatttggtataatctctcatattatttcacaagaaagagggaaaaaagaaacttt
tggatgtttagggataatttatgctataatagcaattggaattttaggatttattgtatg
agctcatcatatgtttacagtaggtatagatattgatactcgagcctattttacttcagc
tactataattattggtgtcccaacaggaagtaaaatttttagatgaatagctactatcca
tggaactcaaatcaattatagaccttcaaaaatatgaagattaggatttgtatttttatt
cacagtaggaggattaacaggtgtaattttagctaattcatcaattgatattactttaca
tgatacttattatgtagtagcccattttcattatgttttatcaataggagctgtatttgc
aattttaggaggatttattcattgatatcctttatttaccggtttatcattaaaccctta
tatattaaaaattcaattttttattatatttactggagtaaacttaacttttttcccaca
acattttttaggtttagcaggaatacctcgacgatactctgattatccagattcttatat
ttcttgaaatattatttcatctttagggtcttatatttctttattagctgtaatattaat
tttaattattatctgagaatcaataattaatcaacgattaattttatttacattaaatat
atcttctaatattgaatgacttcaaaatttaccccccgcagaacactcatataatgaatt
acctattttaagaaacttctaatatggcagattatatgtaatggatttaaaccccattta
taaaggattgtcctttttctagaaatggcgacttgatcaaattttaatctgcaaaatgga
gcttcccccttaatagaacaaattatttttttccatgatcatactttaattattttaatt
ataattacaattttaattagatatttaataattaatttacttttcaataaatatattaat
cgatttttattagaaggccaaataattgaattaatttgaactattttaccaacaattact
ttaatttttattgctttaccttcattacgattattatatttattagacgaactaaataat
cctttaattacattaaaatctattggtcatcaatgatattgaagatatgaatattcagat
tttcataatattgagtttgactcatatataatttctcctaatgaaatatctttaaataat
tttcgtttattagatgtagataaccgaattaccctacctataaataatcaaattcgaatt
atagttactgctactgatgttattcattcttgaactatcccttcattaggagttaaagta
gatgctaatccagggcgacttaatcaaactaacttttttattaaccgaccaggtatttac
tttggtcaatgttcagaaatttgtggtgctaatcatagatttataccaattgtaattgaa
agaatttcaattaaaaattttattaattgaattaataactattcctcattagatgactga
aagtaagtactggtctcttaaaccatttcatagtaaattaacaattacttctaatgaaaa
gaattagttaatttataacataaatatgtcaaatttaaattattacataagtaatattct
tttataccacaaataataccaattaattgaatattatcttttattttatttattattatt
tttttaatttttaatattataaattattatattataaaaaataaaaatttaaataataac
ctaaataataaatcaaatcaaattaataattttaattgaaaatgataaataatttatttt
caatttttgacccttcaactaatttatttaatttatctattaactgaatcagaacttttt
taggtttaatttttattccttatagattttgattaattcctaatcgacattattacttat
gaaattttattcttataaaattacacaatgaatttaaaactttattaaaaaataattact
ttcaaggatctacttttatttttatttcattattttcttttattctatttaataattttt
taggcttatttccttatatttttacaagaactagtcatttaaccttatctttatctattt
ctttaccattatgattaagttttatattatatggttgaattaataattataatcatatat
tttctcacataattcctcaaggaaccccaattattttaataccttttatagtgttaattg
aaacaattagaaatattattcgacctggaactttagccgttcgattaacagccaatataa
ttgccggacatttactaataacattattaagaagaactggtaataatatagctacatata
taattagattattaattataattcaaatcttattattaatcttagaatcagctgtagcag
taattcaatcctatgtaattgctattttaagtactttatattctagagaagttaactaaa
actaacaaatgaaaattaatttcaatcacccataccacttagttgattatagaccttgac
cattaactggggctattggagttataactttagtaacaggaatagtaaaatgatttcata
attttaatacaaacttattaattattggttatctaattattattataactatatatcaat
gatgacgagatatttgtcgagaaggaactttacaaggtaaacatactattttagtaacaa
aaggtttacaatgaggaataattttatttattgtttcagaaattttattttttttttcat
ttttttgagctttttttcacagaagattatcaccaaatattgaaattggatccatatgac
ccccagtaggaattatcccatttaatccttttcaaattcctttattaaatactattattt
taattagatcaggagttacaattacatgagctcaccacgccctaatagacaataaccatt
ctcaatgtacaaaaagcttatttttaactattattttaggagtatactttaccattttac
aagcttatgaatatttagaagctccttttacaattgcagatagaatttatggatcaacct
tttttatagcaacaggattccacggattacatgttataattggaacaatatttttaattg
tatgtttaatccgtcatataaataaacatttctctagtgaacaccattttggatttgaag
cagcagcttggtattgacattttgttgatgtagtttgattatttctttatatttcaattt
actgatgaggaaattaaataatttaacttatttatataatatataaagtatatttgattt
ccaatcaaaaagtttaaaaaacatttaatataaataattatttcaatattaataatttca
attttaattattattatttccaatattataataatattatcaatcttgttatcaaaaaaa
tcattcatagaccgagaaaaatgttccccatttgaatgtggatttgaccctaaatcatct
gcacgaattccattttctctacatttttttttaattacaataatttttctaatttttgat
gtagaaattgccttaattttccccatcatcaaattatttaaattagtaaattttttaatt
tgaataaaaattagatttttatttattattattttactgattggattatatcatgaatga
aatcaaaatatattaaactgaacaaattaatttaggattatagtttataaaaacatttga
tttgcattcaaaaaatattgaaatatcaatttatcttaaataagaagcatacctatgcat
ttaatttcgacttaaaagaagagtttaatcactccttatttgcttattaattgaaaccaa
aaagaggtatatcactgttaatgatatcattgaataatattttccaattaaagaaatata
aagattaaaattaagctgctaacttaatttttagtggttaaattccattaatatttctgt
ttatatagtttatataaaacattacattttcactgtaaaaataaaatattatatttttat
aaatatttaaagataacactatctccttaatatcttcaatattatgctcttatatataag
ctatttaaataaactaatattattattaataaaaagataattcatataataaatctaaac
aaataaattttaaaattatttatttgataaatattataaaaaatagaataatttttaact
acattaaatatacctcaccctctataaatttctcttcacccaaaatcgatgttttttaat
aatttttgactataatttaaaaaataatatcttaaaccataagttcttaatctaggcata
aatcatattaaacataaaaaagttcttaaattataagtaattaaatatttatttaaagaa
taaatttttatatttctaataatataacccataaatataccaaaaaaactaacataaatt
actattaattttaaattaaaaggtaaataaattatataaggataataaaaaattaatcac
attaatattcttcctctaattactcttataaataataatactaatattcttttcaccata
acataatcttcatcatataaactataaatactcaataaattataatcattaatcattaaa
tatattattaaacgaatagtataatatattgttaaacctgtagaaatataatataataaa
aaaactaaaaaattaaaatttctaaatcttactatttctaaaattaaatctttagaataa
aacccggctaaaaaaggaataccacataaagctaaattagaaatattcatacataaacaa
gttataggggtataaaaactaattccccctataaaacgaatatcttgtatatcatttatc
aaatgaataattacacctgcacatataaataataaagctttaaatatagcatgagttaaa
agatgaaaaaatgctaataaaggtatacccattcttaagattctcattattaaacctaat
tgacttaatgttgataaagcaataattttttttaaatcaaattcataattagctgaaatc
ccagccataaatatagttaaactagataataataataaaactttaaaaaatacagtatca
accaataataaattaaatcgaattaataaataaaccccagctgtaactaaagtagatgaa
tgaactaaagcagaaactggtgtaggagctgctatagcagcaggtaatcatgaactaaaa
ggaatttgagctctttttgttatagctgctaatacaatcataactctaatatatattata
caaaaatcattttttataaaatctaaataaaaaatataatttcaactaccaaaatttatt
attcatgcaattactattaaaattataacatccccaattcgattagataaaacagttaat
ataccagcattataagattttaaattttgataataaattactaaacaataagatactaaa
cctaacccatctcaacctaataaaattctaataatattaggactaataattaacaaaatt
atagaaaaaacaaataataataccaaaataataaaccgatttaaatttaattccgatctt
atatatctttttctgtaataaattaccactgaagaaattaaagaaacaaatattataaat
aataatgatattcaatctaataaaatagatataacaatacttaaagaattaaatgaaata
atttcccattctaaaaataaaacaatattatttataataaaatacaacataaaaaaaaaa
attaatattctaaatacaaataaaaataaaaaagagttgaaacaaattgaaaaataattt
ttaataatttaaaatgaattttattcatatttttgataccacaaatcaatattttaatta
aattatttaaataaaatcaaattatactataatcaatttttaaaactaaaatatttaaag
gtaatcaatgtaatattaaaagcaaatattcccgagatacacctatataaaaactatata
ttccttgataatattttccatgttgtgtataagaatataagtataatctatacccagcac
taaaaaaagaaattaatatcaacataaatatagataatgaacatcatcttaatattctat
ttaataacataatttcccctattaaatttaaagaaggaggagctgctatattagaagata
ataataaaaatcatcataatcttatagaaggcataaaattaattattcctttattaatta
acaaacttcgactattaattcgttcataattaatattagctaaacaaaatatacctgatg
agcataaaccatgaccaattattattaaataagaacctaatattcctcaataatttataa
ttataatcccacaaataacaaaacttatatgagctactgatgaataagcaattaaagatt
taatatctacctgacaaaaacactttaaactaatataaaacccccctaataaactaataa
taattcaaatataatttaattttatgttaatttcttgtataaaaatcagtacacgtaata
gcccataaccacctaactttaatataataccagctaaaattatagaccctgaaactgggg
cctctacatgagcttttggcaatcataaatgagtaatatatataggtatcttaaccaaaa
aagctaaaattattctaatataaagaaaataaaaatttatattataaaattttaaaaaat
aaattataatacaacttaaattactaaataaataaaaaatacccattaataaaggtaatg
aagcaaataaagtataaaacaataaatatattccagcttgaatacgttctggttgatacc
cccaaccaataattaatattaaagtaggaattaatctgccctcaaaaaataaataaaata
taaataaatttataactctaaaagttaaatataatattagtaataaaataattacattaa
ataaaaaaaaattaacgtaaaagtcaacttttaataaattctctcttgatataatcatta
gaatacaaattcaaattcttaataaaattagcccaaaagatataatatcacaagaatata
tatatcttaaattaaaataattattaataaaataattattaatatttaaatttatattta
taaatataaatattaataaaaataatatcatttggaccattcaaaatatattttttttaa
aacataaaggaattataaaaattattataattaaaaattttatcattatttatttaaaat
attaattatattattattatttctataataaattaaatcttttaaaataatcattaccat
gagtacgaattaaagatactaaaatagaaagtcctaaagccccctcacatacagagaata
ctaaaaaaactatcagtatatatatctcataatttaatattaataaataaaataataaaa
aaaaaaaagtacttaaaactataaattctaatcttaataaaataattaataaaggtttat
atttaaacccaaaaattaaattacctataaaaaatataaaaataataattatatatatat
atttaattatcattggtttttatagtttaattaaaacattggtcttgtaaaccaaaaata
aaaaatttctttaaaaacttcaaagaaaaagaaaatctttatctataatccccaaaatta
taattttttataaactattctttgacataacaaaaatatttttatcattaataatattat
ttttatcaattattataatttttttaaaccatcctttatcaattggattaataattttaa
ttcaaacgttattaatatgtttattatcaggaatattaattaaaacttattgattttctt
acattttatttttaacttttttaggaggattattagtattatttatttatgtttcaagag
tagcttctaacgaaatatttaatttaacatttaatataaaaatatttttattttttttat
tattattttatttatcaaatcaaatttatttatttatttttgaaaatttaaattgaataa
atttaacaaataatataacagataatgataatttatttaacataatatttttcaataatg
aaaataatattaatttaaataaactttataataatcataattatataattataataatat
taataatttatttatttatttctttagtagcagttgttaaaattacaaacatcttttatg
gtcctttacgatctatttatttttaaaatgacaaataaaaaatttttaagtttacgaaaa
aatcaccctattattaaaattattaatggatctttaattgacttacccaccccttctaat
atctctatatgatgaaattttggatctttattagccttatgtttaattattcaaattatt
actggattatttttaacaatatattatacagctaatatcgaattagctttctatagagta
aattatatttgccgaaatgtaaactatggttgattaattcgaactttacatgctaatgga
gcatcattttttttcatttgcatttatttacatattggacgaggaatctattatgaatca
tttaatttaaaacatacatgaatagtaggtgtaattattttatttttattaatagcaaca
gcttttataggttatgttttaccttggggacaaatatctttctgaggagctactgttatt
actaatttattatccgcaatcccttatttaggaactatattagtaaattgaatttgaggg
gggtttgcagtagataatgcaactttaactcgattttatacctttcattttctattacca
ttcattcttttaataataacaataattcatttattattcttacatcaaacaggatcaaat
aatcctttaggattaaatagaaatttagataaaatcccttttcatccattttttactttt
aaagatttattaggatttattattttacttttttttttaattatattaactctaatcaac
ccaaacttattaggtgaccccgataattttattccagccaatcctttagtgactcctatt
catattcaaccagaatgatattttttatttgcttatgctattttacgatcaattcctaat
aaattaggaggagtaattgctttaactatatctattttaattttaattattttacccttc
acttttaacaaaaaaatccaaggaatacaattttatcctattaaccaaattttattttga
acatttattataataattattttattaacatgaattggagctcgacccgtagaagatcct
tatattattacaggtcaattattaacatttttttattttctttattttattattaaccca
attttaaataaatattgagataatcttttatttaattaaattaatgagcttgtttttaag
catttgttttgaaaacttaagaaagaattatattattctattaatttatactaaaaataa
tataattataataaaaaaatttttaatcctatataaaataataaaaaatttaaagaaact
ggtaaatatctttttcaagataaatatattaatttatcataacgataacgaggtaaagtt
ccacgaacccaaataaataaaaatgaaataaaaactaattttaaataaaaaattaaagtt
ataacataaccccctaaataaattaatacaaataatattcttataaataaaatacttgaa
tattcagctaaaaaaattaaagcaaacccccctcttctgtattcaacattaaaccctgaa
actaattctctttcaccttcagcaaaatcaaaaggagtacgattagtttcagctattcta
gaagataatcaacataaagataaaggaaatattaaaaatataaatcaaattaaattttga
tattctataaatttaattaaattaaaatctataattataataatcccagatataaaaatt
aatgctaatcttacttcataggaaatagtttgagctactgaacgtaaaccccctaataaa
gcataattagaattagaagatcatcccgcaactattacagtataaacccctaatctagta
caacaaaaaaaaaataaaatacccaaattaaatcttactaaattaaaataataaggaatc
aatattcaaattattaatgataaaataaaactaattacaggagaaaaataataagaaaca
taattagaatataaaggaaaagtttgctccttagtaaataatttaatagcatctgaaaaa
ggttgtaaaattcccataattccaactttattagggccttttcgaatttgaatgtaccct
aaaacttttcgctctaataaagttaaaaaagctacacctactaaaacacctaaaactaaa
atcaataaaccaacaatcattaaataaatatcttttataaacaatactatttatataatt
aatattatatatttatgaattctaaaatcattacatttttctgtcaaaatagtataataa
aatataaataaattttatataattattaataatattcttaaaaatataatttaattataa
tatttgatcctttcgtactaaaatatttaatttaataaaagatagaaaccaacctggctc
acaccggtttgaactcagatcatgtaagattttaatgatcgaacagatcaaaaattttaa
acttttgcatttaaattttatcttaatccaacatcgaggtcgcaaactttttttcttatt
tgaactaaaaaaaaaaattacgctgttatccctaaggtaatttaatcttataatcaataa
aattggatcaatcactcaattatctctgttaaaaattttaaaaaagttaaatttattttt
ttatcaccccaataaaataattaaatttataaaaatttttattataatattatatatata
tatatatatattataataataatataaacaatttattaataaatttaattataaaactct
aaagggtcttctcgtctttttaaattatttttactttttaaaaaaaaaattaagttctat
atattaattaagaaacagtttatatttcattcaatctttcatacaagtcaccaattaaga
gactaatgattatgctacctttgtacagtcaaaatactgcagccctttaattattatcag
tgggcagattagactttaaattaaattctaaaagacatgtttttgttaaacaagtgaata
taaatttttgccgaattctttttaattaattaaattatttatttttaaattaaaattaaa
taaataaaaatatactaattttatcattatatttaatttttcacaaataaaaaaaatttt
tttataaaaatttaaattaatttaaattttatattatttgaaattatttataataaatta
aaatttattaacaatataaattataaaattttcaaaaatatatttttttattataaaaat
ttaatttaaagcttatcccttaaaatataaaattttttttaaataaaattaattaattaa
ttttatttaatttataaattcaaaattaaatttttttctaaaaaaactagatatcttcaa
aaacgaataacatttcatttcaaaataattatttaaaataattttactacattaactttt
ataattatttaactcttttaaattcgagaaattaatatttaaattaaatatttttaataa
actctgatacacaagatacaataaataaaatttactttttaataaattattatttcatat
atttcaaaattctttcacaatactaattaactataaattttataattttttctttaaata
atactttaacccctattaaattattataaattaaaattatttttattattattaaattta
ttaattttttccttcaaattaattaatattattaatatcttttcaatgtaaatgaaatac
tttaccaagctctaatttgtttctttctagaaacactttccagtacctctactttgttac
gacttatttcaatttattaatgaaagcgacgggcaatatgtacatattttaatttttaat
cattttattatattaaataaaattacatttaaatccacttttatttaatttttacaaatt
aaaattcatttaaataaatttattgtaatccattatattcttaattataatctgcatctt
gatttgatttaatttttttttataactttaaaatattattaattattaaaaaatattttt
ttaacaacgatatacaaaatattaaattaagtaaatttaatcgtggattatcaattaata
aacagattcctctaaataaactaaaataccgccaaaatatttaagtttcaataaataatt
acctactatttcagtatttttaaatttaaattttaaataatagggtatctaatcctagtt
tattattaaaatttattaaatcataaataaaataaataaattaaataaaattaaaatttc
acttaataattttaattttaaattattattaaatattatactataataatataattaatt
attaaataactaataaaatttaatttaacttttgtttaaccgcaactgctggcacaaaat
ttgttataaatttttatattactaaatcttaatttcttaaatttttaatattaattacta
cttaaaataaatatttttaaaataaataaataaatatacactaaaatttatatgtaaaat
aaatttaaaataaattttttaaaccatataaaatttatttatatattttatttactaaat
agattttttttttttttttttaaaattaaatatttatattattattataaatttattata
tattattattattataaatttattatatattattattattataaatttattatatattat
tattaaaaatttattatatattattattattattaaaaatttattatatattattattat
taaaaatttattatatattattattattattataaatttattatatattattattattat
tataaatttattatatattattattattattataaatttattatataatattaatattaa
ttattaaatttttaataatttttttcttattttttttataatattaatatatttttatat
atatatatatatatatatatatatatatatatatatatatatattaaaccattgttaatc
tttttttatataaaaaaga";

*/


// Create files
require_once 'sg_dna.php';
require_once 'basedata.php';

function getRnaBase($dnaBase)
{
    switch($dnaBase)
    {
        case 'a':
            return 'u';
            break;
        case 't':
            return 'a';
            break;
        case 'g':
            return 'c';
            break;
        case 'c':
            return 'g';
            break;
        default:
            echo "found a rebel $dnaBase";
    }
}

function getRnaSequence($dna)
{
    $rna = '';
    for($i=0;$i<strlen($dna);$i++)
    {
        $rna .= getRnaBase($dna[$i]);
    }
}

function getAminoAcidSequence($triplets,$aaData)
{
    $sequence = array();
    foreach($triplets as $triplet)
    {
        $sequence[] == $aaData[$triplet[0]][$triplet[1]][$triplet[2]];
    }
    return $sequence;
}

function getTriplets($rnaSequence)
{
    $triplets  = array();
    $endOffset = strlen($rnaSequence);
    for($i=0;$i<strlen($rnaSequence);$i+=3)
    {
        $triplets[] = $rnaSequence[$i].$rnaSequence[$i+1].$rnaSequence[$i+2]
    }
    return $triplets;
}

/* Use this for testing purpose
function splitStringGroup($str, $step)
{
    $splitted = array();
    $endOffSet = strlen($str) % $step;

    for($i=0;$i<strlen($str)-$endOffSet;$i+=$step)
    {
        $group = '';
        for($j=0;$j<$step;$j++)
        {
            $group .= $str[$i+$j],
        }
        $splitted[] = $group;
    }
    return $splitted;
}

printThisArray($arr)
{
  print_r($arr);
}

*/

$rnaSequence = getRnaSequence($dna_sequence);
//$triplets  = getTriplets($rnaSequence);
//$sequence  = getAminoAcidSequence($triplets,$codes);

printThisArray(splitStringGroup($rnaSequence,4));

?>
