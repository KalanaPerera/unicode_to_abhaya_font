<?php
$text = preg_replace('/'.preg_quote('ද්‍ර','#').'/','ø', $text);
$text = '/,/';// preg_replace('/'.preg_quote(',','#').'/', '￦', $text); 
$text = "/\\\'/"; // preg_replace('/'.preg_quote("/'",'#').'/','z', $text); 
$text = preg_replace('/'.preg_quote(' (','#').'/','^', $text); 
$text = '/\\)/' ;// preg_replace('/'.preg_quote('3','#').'/','&', $text); 
$text = preg_replace('/'.preg_quote('%','#').'/', ']', $text); 
$text = '/\\//'; // preg_replace('/'.preg_quote('\\//','#').'/','$', $text); 
$text = preg_replace('/'.preg_quote('–','#').'/', '-', $text); 
$text = preg_replace('/'.preg_quote('\?','#').'/','@', $text); 
$text = preg_replace('/'.preg_quote('!','#').'/', 'æ', $text); 
$text = preg_replace('/'.preg_quote('\=','#').'/','}', $text); 
$text = preg_replace('/'.preg_quote('.','#').'/', "'"); 
$text = preg_replace('/'.preg_quote('\+','#').'/','¬', $text); 
$text = preg_replace('/'.preg_quote('\:','#').'/','(', $text); 
$text = preg_replace('/'.preg_quote('\÷','#').'/','­­­-', $text); 
$text = preg_replace('/'.preg_quote('\;','#').'/','¦', $text); 
$text = preg_replace('/'.preg_quote('ත්‍රෛ','#').'/','ff;%', $text);
$text = preg_replace('/'.preg_quote('ශෛ','#').'/','ffY', $text);
$text = preg_replace('/'.preg_quote('චෛ','#').'/', 'ffp', $text); 
$text = preg_replace('/'.preg_quote('ජෛ','#').'/', 'ffc', $text); 
$text = preg_replace('/'.preg_quote('කෛ','#').'/','ffl', $text);
$text = preg_replace('/'.preg_quote('මෛ','#').'/', 'ffu', $text); 
$text = preg_replace('/'.preg_quote('පෛ','#').'/', 'ffm', $text); 
$text = preg_replace('/'.preg_quote('දෛ','#').'/','ffo', $text); 
$text = preg_replace('/'.preg_quote('තෛ','#').'/','ff;', $text);
$text = preg_replace('/'.preg_quote('නෛ','#').'/','ffk', $text);
$text = preg_replace('/'.preg_quote('ධෛ','#').'/', 'ffO', $text); 
$text = preg_replace('/'.preg_quote('වෛ','#').'/', 'ffj', $text);
$text = preg_replace('/'.preg_quote('ප්‍රෞ','#').'/', 'fm%!', $text); 
$text = preg_replace('/'.preg_quote('ෂ්‍යෝ','#').'/', 'fIHda', $text);
$text = preg_replace('/'.preg_quote('ඡ්‍යෝ','#').'/', 'fPHda', $text);
$text = preg_replace('/'.preg_quote('ඪ්‍යෝ','#').'/', 'fVHda', $text);
$text = preg_replace('/'.preg_quote('ඝ්‍යෝ','#').'/', 'f>Hda', $text);
$text = preg_replace('/'.preg_quote('ඛ්‍යෝ','#').'/', 'fLHda', $text);
$text = preg_replace('/'.preg_quote('ළ්‍යෝ','#').'/', 'f<Hda', $text);
$text = preg_replace('/'.preg_quote('ඵ්‍යෝ','#').'/', 'fMHda', $text);
$text = preg_replace('/'.preg_quote('ඨ්‍යෝ','#').'/', 'fGHda', $text);
$text = preg_replace('/'.preg_quote('ශ්‍යෝ','#').'/', 'fYHda', $text);
$text = preg_replace('/'.preg_quote('ක්‍ෂ්‍යෝ','#').'/', 'fÌHda', $text);
$text = preg_replace('/'.preg_quote('බ්‍යෝ','#').'/', 'fnHda', $text);
$text = preg_replace('/'.preg_quote('ච්‍යෝ','#').'/', 'fpHda', $text);
$text = preg_replace('/'.preg_quote('ඩ්‍යෝ','#').'/', 'fâHda', $text);
$text = preg_replace('/'.preg_quote('ෆ්‍යෝ','#').'/', 'f*Hda', $text);
$text = preg_replace('/'.preg_quote('ග්‍යෝ','#').'/', 'f.Hda', $text);
$text = preg_replace('/'.preg_quote('ජ්‍යෝ','#').'/', 'fcHda', $text);
$text = preg_replace('/'.preg_quote('ක්‍යෝ','#').'/', 'flHda', $text); 
$text = preg_replace('/'.preg_quote('ල්‍යෝ','#').'/', 'f,Hda', $text);
$text = preg_replace('/'.preg_quote('ම්‍යෝ','#').'/', 'fuHda', $text);
$text = preg_replace('/'.preg_quote('න්‍යෝ','#').'/', 'fkHda', $text); 
$text = preg_replace('/'.preg_quote('ප්‍යෝ','#').'/', 'fmHda', $text);
$text = preg_replace('/'.preg_quote('ද්‍යෝ','#').'/','foHda', $text);
$text = preg_replace('/'.preg_quote('ස්‍යෝ','#').'/', 'fiHda', $text);
$text = preg_replace('/'.preg_quote('ට්‍යෝ','#').'/', 'fgHda', $text);
$text = preg_replace('/'.preg_quote('ව්‍යෝ','#').'/','fjHda', $text); 
$text = preg_replace('/'.preg_quote('ත්‍යෝ','#').'/', 'f;Hda', $text); 
$text = preg_replace('/'.preg_quote('භ්‍යෝ','#').'/', 'fNHda', $text); 
$text = preg_replace('/'.preg_quote('ධ්‍යෝ','#').'/', 'fOHda', $text);
$text = preg_replace('/'.preg_quote('ථ්‍යෝ','#').'/', 'f:Hda', $text);
$text = preg_replace('/'.preg_quote('ෂ්‍යො','#').'/', 'fIHd', $text);
$text = preg_replace('/'.preg_quote('ශ්‍යො','#').'/', 'fYHd', $text);
$text = preg_replace('/'.preg_quote('ඛ්‍යො','#').'/', 'fLHd', $text);
$text = preg_replace('/'.preg_quote('ක්‍ෂ්‍යො','#').'/', 'fÌHd', $text);
$text = preg_replace('/'.preg_quote('බ්‍යො','#').'/', 'fnHd', $text);
$text = preg_replace('/'.preg_quote('ව්‍යො','#').'/','fjHd', $text); 
$text = preg_replace('/'.preg_quote('ඩ්‍යො','#').'/', 'fvHd', $text);
$text = preg_replace('/'.preg_quote('ෆ්‍යො','#').'/', 'f*Hd', $text);
$text = preg_replace('/'.preg_quote('ග්‍යො','#').'/', 'f.Hd', $text);
$text = preg_replace('/'.preg_quote('ජ්‍යො','#').'/', 'fcHd', $text);
$text = preg_replace('/'.preg_quote('ක්‍යො','#').'/', 'flHd', $text); 
$text = preg_replace('/'.preg_quote('ම්‍යො','#').'/', 'fuHd', $text);
$text = preg_replace('/'.preg_quote('ප්‍යො','#').'/', 'fmHd', $text);
$text = preg_replace('/'.preg_quote('ද්‍යො','#').'/','foHd', $text);
$text = preg_replace('/'.preg_quote('ස්‍යො','#').'/', 'fiHd', $text);
$text = preg_replace('/'.preg_quote('ට්‍යො','#').'/', 'fgHd', $text);
$text = preg_replace('/'.preg_quote('ව්‍යො','#').'/','fjHd', $text); 
$text = preg_replace('/'.preg_quote('ත්‍යො','#').'/', 'f;Hd', $text); 
$text = preg_replace('/'.preg_quote('භ්‍යො','#').'/', 'fNHd', $text); 
$text = preg_replace('/'.preg_quote('ධ්‍යො','#').'/', 'fOHd', $text);
$text = preg_replace('/'.preg_quote('ථ්‍යො','#').'/', 'f:Hd', $text);
$text = preg_replace('/'.preg_quote('ෂ්‍යෙ','#').'/', 'fIH', $text); 
$text = preg_replace('/'.preg_quote('ඡ්‍යෙ','#').'/', 'fPH', $text); 
$text = preg_replace('/'.preg_quote('ළ්‍යෙ','#').'/', 'f<H', $text); 
$text = preg_replace('/'.preg_quote('ණ්‍යෙ','#').'/', 'fKH', $text);
$text = preg_replace('/'.preg_quote('ච්‍යෙ','#').'/', 'fpH', $text); 
$text = preg_replace('/'.preg_quote('ල්‍යෙ','#').'/', 'f,H', $text); 
$text = preg_replace('/'.preg_quote('න්‍යෙ','#').'/','fkH', $text);
$text = preg_replace('/'.preg_quote('ශ්‍යෙ','#').'/','fYH', $text);
$text = preg_replace('/'.preg_quote('ඛ්‍යෙ','#').'/','fLH', $text);
$text = preg_replace('/'.preg_quote('ක්‍ෂ්යෙ','#').'/','fÌH', $text); 
$text = preg_replace('/'.preg_quote('බ්‍යෙ','#').'/','fnH', $text);
$text = preg_replace('/'.preg_quote('ඩ්‍යෙ','#').'/', 'fvH', $text); 
$text = preg_replace('/'.preg_quote('ෆ්‍යෙ','#').'/', 'f*H', $text); 
$text = preg_replace('/'.preg_quote('ග්‍යෙ','#').'/','f.H', $text);
$text = preg_replace('/'.preg_quote('ජ්‍යෙ','#').'/', 'fcH', $text); 
$text = preg_replace('/'.preg_quote('ක්‍යෙ','#').'/','flH', $text);
$text = preg_replace('/'.preg_quote('ම්‍යෙ','#').'/', 'fuH', $text); 
$text = preg_replace('/'.preg_quote('ප්‍යෙ','#').'/', 'fmH', $text); 
$text = preg_replace('/'.preg_quote('ද්‍යෙ','#').'/','foH', $text); 
$text = preg_replace('/'.preg_quote('ස්‍යෙ','#').'/', 'fiH', $text); 
$text = preg_replace('/'.preg_quote('ට්‍යෙ','#').'/', 'fgH', $text); 
$text = preg_replace('/'.preg_quote('ව්‍යෙ','#').'/', 'fjH', $text);
$text = preg_replace('/'.preg_quote('ත්‍යෙ','#').'/','f;H', $text);
$text = preg_replace('/'.preg_quote('භ්‍යෙ','#').'/','fNH', $text);
$text = preg_replace('/'.preg_quote('ධ්‍යෙ','#').'/', 'fOH', $text); 
$text = preg_replace('/'.preg_quote('ථ්‍යෙ','#').'/', 'f:H', $text); 
$text = preg_replace('/'.preg_quote('ෂ්‍රෝ','#').'/','fI%da', $text); 
$text = preg_replace('/'.preg_quote('ඝ්‍රෝ','#').'/','f>%da', $text); 
$text = preg_replace('/'.preg_quote('ශ්‍රෝ','#').'/', 'fY%da', $text);
$text = preg_replace('/'.preg_quote('ක්‍ෂ්‍රෝ','#').'/', 'fÌ%da', $text);
$text = preg_replace('/'.preg_quote('බ්‍රෝ','#').'/', 'fn%da', $text);
$text = preg_replace('/'.preg_quote('ඩ්‍රෝ','#').'/', 'fv%da', $text);
$text = preg_replace('/'.preg_quote('ෆ්‍රෝ','#').'/','f*%da', $text); 
$text = preg_replace('/'.preg_quote('ග්‍රෝ','#').'/', 'f.%da', $text);
$text = preg_replace('/'.preg_quote('ක්‍රෝ','#').'/', 'fl%da', $text);
$text = preg_replace('/'.preg_quote('ප්‍රෝ','#').'/','fm%da', $text); 
$text = preg_replace('/'.preg_quote('ද්‍රෝ','#').'/','føda', $text);
$text = preg_replace('/'.preg_quote('ස්‍රෝ','#').'/', 'fi%da', $text);
$text = preg_replace('/'.preg_quote('ට්‍රෝ','#').'/','fg%da', $text); 
$text = preg_replace('/'.preg_quote('ත්‍රෝ','#').'/', 'f;%da', $text);
$text = preg_replace('/'.preg_quote('ශ්‍රො','#').'/', 'fY%d', $text);
$text = preg_replace('/'.preg_quote('ඩ්‍රො','#').'/', 'fv%d', $text);
$text = preg_replace('/'.preg_quote('ෆ්‍රො','#').'/','f*%d', $text); 
$text = preg_replace('/'.preg_quote('ග්‍රො','#').'/', 'f.%d', $text);
$text = preg_replace('/'.preg_quote('ක්‍රො','#').'/', 'fl%d', $text);
$text = preg_replace('/'.preg_quote('ප්‍රො','#').'/','fm%d', $text); 
$text = preg_replace('/'.preg_quote('ද්‍රො','#').'/','fød', $text);
$text = preg_replace('/'.preg_quote('ස්‍රො','#').'/', 'fi%d', $text);
$text = preg_replace('/'.preg_quote('ට්‍රො','#').'/','fg%d', $text); 
$text = preg_replace('/'.preg_quote('ත්‍රො','#').'/', 'f;%d', $text);
$text = preg_replace('/'.preg_quote('ශ්‍රේ','#').'/', 'fYa', $text); 
$text = preg_replace('/'.preg_quote('බ්‍රේ','#').'/', 'fí%', $text); 
$text = preg_replace('/'.preg_quote('ඩ්‍රේ','#').'/', 'fâ%', $text); 
$text = preg_replace('/'.preg_quote('ෆ්‍රේ','#').'/', 'f*a%', $text);
$text = preg_replace('/'.preg_quote('ග්‍රේ','#').'/', 'f.a%', $text); 
$text = preg_replace('/'.preg_quote('ක්‍රේ','#').'/','fla%', $text);
$text = preg_replace('/'.preg_quote('ප්‍රේ','#').'/', 'fma%', $text);
$text = preg_replace('/'.preg_quote('ද්‍රේ','#').'/','føa', $text); 
$text = preg_replace('/'.preg_quote('ස්‍රේ','#').'/', 'fia%', $text); 
$text = preg_replace('/'.preg_quote('ත්‍රේ','#').'/','f;a%', $text);
$text = preg_replace('/'.preg_quote('ධ්‍රේ','#').'/', 'fè%', $text);
$text = preg_replace('/'.preg_quote('ෂ්‍රෙ','#').'/', 'fI%', $text);
$text = preg_replace('/'.preg_quote('ශ්‍රෙ','#').'/', 'fY%', $text); 
$text = preg_replace('/'.preg_quote('බ්‍රෙ','#').'/', 'fn%', $text); 
$text = preg_replace('/'.preg_quote('ෆ්‍රෙ','#').'/', 'f*%', $text);
$text = preg_replace('/'.preg_quote('ග්‍රෙ','#').'/', 'f.%', $text); 
$text = preg_replace('/'.preg_quote('ක්‍රෙ','#').'/','fl%', $text);
$text = preg_replace('/'.preg_quote('ප්‍රෙ','#').'/', 'fm%', $text);
$text = preg_replace('/'.preg_quote('ද්‍රෙ','#').'/','fø', $text); 
$text = preg_replace('/'.preg_quote('ස්‍රෙ','#').'/', 'fi%', $text); 
$text = preg_replace('/'.preg_quote('ත්‍රෙ','#').'/','f;%', $text);
$text = preg_replace('/'.preg_quote('භ්‍රෙ','#').'/','fN%', $text);
$text = preg_replace('/'.preg_quote('ධ්‍රෙ','#').'/', 'fO%', $text);
$text = preg_replace('/'.preg_quote('්‍ය','#').'/','H', $text);
$text = preg_replace('/'.preg_quote('බ්‍රි','#').'/','ì%', $text);
$text =preg_replace('/'.preg_quote('්‍ර','#').'/', '%', $text);
$text = preg_replace('/'.preg_quote('ෂෞ','#').'/', 'fI!', $text); 
$text = preg_replace('/'.preg_quote('ඡෞ','#').'/', 'fP!', $text); 
$text = preg_replace('/'.preg_quote('ශෞ','#').'/','fY!', $text);
$text = preg_replace('/'.preg_quote('බෞ','#').'/','fn!', $text);
$text = preg_replace('/'.preg_quote('චෞ','#').'/', 'fp!', $text); 
$text = preg_replace('/'.preg_quote('ඩෞ','#').'/', 'fv!', $text); 
$text = preg_replace('/'.preg_quote('ෆෞ','#').'/', 'f*!', $text); 
$text = preg_replace('/'.preg_quote('ගෞ','#').'/','f.!', $text);
$text = preg_replace('/'.preg_quote('ජෞ','#').'/', 'fc!', $text); 
$text = preg_replace('/'.preg_quote('කෞ','#').'/','fl!', $text);
$text = preg_replace('/'.preg_quote('ලෞ','#').'/', 'f,!', $text); 
$text = preg_replace('/'.preg_quote('මෞ','#').'/', 'fu!', $text); 
$text = preg_replace('/'.preg_quote('නෞ','#').'/','fk!', $text);
$text = preg_replace('/'.preg_quote('පෞ','#').'/', 'fm!', $text); 
$text = preg_replace('/'.preg_quote('දෞ','#').'/','fo!', $text); 
$text = preg_replace('/'.preg_quote('රෞ','#').'/', 'fr!', $text);
$text = preg_replace('/'.preg_quote('සෞ','#').'/', 'fi!', $text); 
$text = preg_replace('/'.preg_quote('ටෞ','#').'/', 'fg!', $text); 
$text = preg_replace('/'.preg_quote('තෞ','#').'/','f;!', $text);
$text = preg_replace('/'.preg_quote('භෞ','#').'/','fN!', $text);
$text = preg_replace('/'.preg_quote('ඤෞ','#').'/', 'f[!', $text);
$text = preg_replace('/'.preg_quote('ෂෝ','#').'/','fIda', $text); 
$text = preg_replace('/'.preg_quote('ඹෝ','#').'/', 'fUda', $text);
$text = preg_replace('/'.preg_quote('ඡෝ','#').'/','fPda', $text); 
$text = preg_replace('/'.preg_quote('ඪෝ','#').'/','fVda', $text); 
$text = preg_replace('/'.preg_quote('ඝෝ','#').'/','f>da', $text); 
$text = preg_replace('/'.preg_quote('ඛෝ','#').'/', 'fLda', $text);
$text = preg_replace('/'.preg_quote('ළෝ','#').'/','f<da', $text); 
$text = preg_replace('/'.preg_quote('ඟෝ','#').'/', 'fÛda', $text);
$text = preg_replace('/'.preg_quote('ණෝ','#').'/','fKda', $text);
$text = preg_replace('/'.preg_quote('ඵෝ','#').'/','fMda', $text); 
$text = preg_replace('/'.preg_quote('ඨෝ','#').'/','fGda', $text); 
$text = preg_replace('/'.preg_quote('ඬෝ','#').'/', 'f~da', $text);
$text = preg_replace('/'.preg_quote('ශෝ','#').'/', 'fYda', $text);
$text = preg_replace('/'.preg_quote('ඥෝ','#').'/', 'f{da', $text); 
$text = preg_replace('/'.preg_quote('ඳෝ','#').'/','f|da', $text);
$text = preg_replace('/'.preg_quote('ක්‍ෂෝ','#').'/', 'fÌda', $text);
$text = preg_replace('/'.preg_quote('බෝ','#').'/', 'fnda', $text);
$text = preg_replace('/'.preg_quote('චෝ','#').'/','fpda', $text); 
$text = preg_replace('/'.preg_quote('ඩෝ','#').'/','fvda', $text); 
$text = preg_replace('/'.preg_quote('ෆෝ','#').'/','f*da', $text); 
$text = preg_replace('/'.preg_quote('ගෝ','#').'/', 'f.da', $text);
$text = preg_replace('/'.preg_quote('හෝ','#').'/', 'fyda', $text);
$text = preg_replace('/'.preg_quote('ජෝ','#').'/','fcda', $text); 
$text = preg_replace('/'.preg_quote('කෝ','#').'/', 'flda', $text);
$text = preg_replace('/'.preg_quote('ලෝ','#').'/','f,da', $text); 
$text = preg_replace('/'.preg_quote('මෝ','#').'/','fuda', $text); 
$text = preg_replace('/'.preg_quote('නෝ','#').'/', 'fkda', $text);
$text = preg_replace('/'.preg_quote('පෝ','#').'/','fmda', $text); 
$text = preg_replace('/'.preg_quote('දෝ','#').'/', 'foda', $text); 
$text = preg_replace('/'.preg_quote('රෝ','#').'/','frda', $text);
$text = preg_replace('/'.preg_quote('සෝ','#').'/','fida', $text); 
$text = preg_replace('/'.preg_quote('ටෝ','#').'/','fgda', $text); 
$text = preg_replace('/'.preg_quote('වෝ','#').'/','fjda', $text);
$text = preg_replace('/'.preg_quote('තෝ','#').'/', 'f;da', $text);
$text = preg_replace('/'.preg_quote('භෝ','#').'/', 'fNda', $text);
$text = preg_replace('/'.preg_quote('යෝ','#').'/','fhda', $text); 
$text = preg_replace('/'.preg_quote('ඤෝ','#').'/','f[da', $text);
$text = preg_replace('/'.preg_quote('ධෝ','#').'/','fOda', $text); 
$text = preg_replace('/'.preg_quote('ථෝ','#').'/','f:da', $text); 
$text = preg_replace('/'.preg_quote('ෂො','#').'/','fId', $text); 
$text = preg_replace('/'.preg_quote('ඹො','#').'/', 'fUd', $text);
$text = preg_replace('/'.preg_quote('ඡො','#').'/','fPd', $text); 
$text = preg_replace('/'.preg_quote('ඪො','#').'/','fVd', $text); 
$text = preg_replace('/'.preg_quote('ඝො','#').'/','f>d', $text); 
$text = preg_replace('/'.preg_quote('ඛො','#').'/', 'fLd', $text);
$text = preg_replace('/'.preg_quote('ළො','#').'/','f<d', $text); 
$text = preg_replace('/'.preg_quote('ඟො','#').'/', 'fÕd', $text);
$text = preg_replace('/'.preg_quote('ණො','#').'/','fKd', $text);
$text = preg_replace('/'.preg_quote('ඵො','#').'/','fMd', $text); 
$text = preg_replace('/'.preg_quote('ඨො','#').'/','fGd', $text); 
$text = preg_replace('/'.preg_quote('ඬො','#').'/', 'f~da', $text);
$text = preg_replace('/'.preg_quote('ශො','#').'/', 'fYd', $text);
$text = preg_replace('/'.preg_quote('ඥො','#').'/', 'f{d', $text); 
$text = preg_replace('/'.preg_quote('ඳො','#').'/','f|d', $text);
$text = preg_replace('/'.preg_quote('ක්‍ෂො','#').'/', 'fÌd', $text);
$text = preg_replace('/'.preg_quote('බො','#').'/', 'fnd', $text);
$text = preg_replace('/'.preg_quote('චො','#').'/','fpd', $text); 
$text = preg_replace('/'.preg_quote('ඩො','#').'/','fvd', $text); 
$text = preg_replace('/'.preg_quote('ෆො','#').'/','f*d', $text); 
$text = preg_replace('/'.preg_quote('ගො','#').'/', 'f.d', $text);
$text = preg_replace('/'.preg_quote('හො','#').'/', 'fyd', $text);
$text = preg_replace('/'.preg_quote('ජො','#').'/','fcd', $text); 
$text = preg_replace('/'.preg_quote('කො','#').'/', 'fld', $text);
$text = preg_replace('/'.preg_quote('ලො','#').'/','f,d', $text); 
$text = preg_replace('/'.preg_quote('මො','#').'/','fud', $text); 
$text = preg_replace('/'.preg_quote('නො','#').'/', 'fkd', $text);
$text = preg_replace('/'.preg_quote('පො','#').'/','fmd', $text); 
$text = preg_replace('/'.preg_quote('දො','#').'/', 'fod', $text); 
$text = preg_replace('/'.preg_quote('රො','#').'/','frd', $text);
$text = preg_replace('/'.preg_quote('සො','#').'/','fid', $text); 
$text = preg_replace('/'.preg_quote('ටො','#').'/','fgd', $text); 
$text = preg_replace('/'.preg_quote('වො','#').'/','fjd', $text);
$text = preg_replace('/'.preg_quote('තො','#').'/', 'f;d', $text);
$text = preg_replace('/'.preg_quote('භො','#').'/', 'fNd', $text);
$text = preg_replace('/'.preg_quote('යො','#').'/','fhd', $text); 
$text = preg_replace('/'.preg_quote('ඤො','#').'/','f[d', $text);
$text = preg_replace('/'.preg_quote('ධො','#').'/','fOd', $text); 
$text = preg_replace('/'.preg_quote('ථො','#').'/','f:d', $text); 
$text = preg_replace('/'.preg_quote('ෂේ','#').'/', 'fIa', $text);
$text = preg_replace('/'.preg_quote('ඹේ','#').'/', 'fò', $text); 
$text = preg_replace('/'.preg_quote('ඡේ','#').'/', 'fþ', $text);
$text = preg_replace('/'.preg_quote('ඪේ','#').'/', 'fa', $text);
$text = preg_replace('/'.preg_quote('ඝේ','#').'/', 'f>a', $text);
$text = preg_replace('/'.preg_quote('ඛේ','#').'/', 'fÄ', $text); 
$text = preg_replace('/'.preg_quote('ළේ','#').'/', 'f<a', $text);
$text = preg_replace('/'.preg_quote('ගේ','#').'/', 'f.a', $text); 
$text = preg_replace('/'.preg_quote('ඟේ','#').'/','fÕa', $text);
$text = preg_replace('/'.preg_quote('ණේ','#').'/','fKa', $text); 
$text = preg_replace('/'.preg_quote('ඵේ','#').'/', 'fMa', $text);
$text = preg_replace('/'.preg_quote('ඨේ','#').'/', 'fGa', $text);
$text = preg_replace('/'.preg_quote('ඬේ','#').'/', 'få', $text); 
$text = preg_replace('/'.preg_quote('ශේ','#').'/', 'fYa', $text); 
$text = preg_replace('/'.preg_quote('ඥේ','#').'/','f{a', $text);
$text = preg_replace('/'.preg_quote('ඳේ','#').'/','f|a', $text); 
$text = preg_replace('/'.preg_quote('ක්‍ෂේ','#').'/', 'fÌa', $text); 
$text = preg_replace('/'.preg_quote('බේ','#').'/', 'fí', $text); 
$text = preg_replace('/'.preg_quote('චේ','#').'/', 'fÉ', $text);
$text = preg_replace('/'.preg_quote('ඩේ','#').'/', 'fâ', $text);
$text = preg_replace('/'.preg_quote('ෆේ','#').'/', 'f*', $text);
$text = preg_replace('/'.preg_quote('ගේ','#').'/', 'f.a', $text); 
$text = preg_replace('/'.preg_quote('හේ','#').'/','fya', $text);
$text = preg_replace('/'.preg_quote('පේ','#').'/', 'fma', $text);
$text = preg_replace('/'.preg_quote('කේ','#').'/','fla', $text);
$text = preg_replace('/'.preg_quote('ලේ','#').'/', 'f,a', $text);
$text = preg_replace('/'.preg_quote('මේ','#').'/', 'fï', $text);
$text = preg_replace('/'.preg_quote('නේ','#').'/','fka', $text);
$text = preg_replace('/'.preg_quote('ජේ','#').'/', 'fÊ', $text);
$text = preg_replace('/'.preg_quote('දේ','#').'/','foa', $text);
$text = preg_replace('/'.preg_quote('රේ','#').'/', 'f¾', $text);
$text = preg_replace('/'.preg_quote('සේ','#').'/', 'fia', $text);
$text = preg_replace('/'.preg_quote('ටේ','#').'/', 'fÜ', $text);
$text = preg_replace('/'.preg_quote('වේ','#').'/', 'fõ', $text);
$text = preg_replace('/'.preg_quote('තේ','#').'/','f;a', $text);
$text = preg_replace('/'.preg_quote('භේ','#').'/','fNa', $text);
$text = preg_replace('/'.preg_quote('යේ','#').'/', 'fha', $text);
$text = preg_replace('/'.preg_quote('ඤේ','#').'/', 'f[a', $text);
$text = preg_replace('/'.preg_quote('ධේ','#').'/', 'fè', $text);
$text = preg_replace('/'.preg_quote('ථේ','#').'/', 'f:a', $text);
$text = preg_replace('/'.preg_quote('ෂෙ','#').'/', 'fI', $text);
$text = preg_replace('/'.preg_quote('ඹෙ','#').'/', 'fU', $text); 
$text = preg_replace('/'.preg_quote('ඓ','#').'/', 'ft', $text);
$text = preg_replace('/'.preg_quote('ඡෙ','#').'/', 'fP', $text);
$text = preg_replace('/'.preg_quote('ඪෙ','#').'/', 'fV', $text);
$text = preg_replace('/'.preg_quote('ඝෙ','#').'/', 'f>', $text);
$text = preg_replace('/'.preg_quote('ඛෙ','#').'/', 'fn', $text); 
$text = preg_replace('/'.preg_quote('ළෙ','#').'/', 'f<', $text);
$text = preg_replace('/'.preg_quote('ඟෙ','#').'/','fÛ', $text);
$text = preg_replace('/'.preg_quote('ණෙ','#').'/','fK', $text); 
$text = preg_replace('/'.preg_quote('ඵෙ','#').'/', 'fM', $text);
$text = preg_replace('/'.preg_quote('ඨෙ','#').'/', 'fG', $text);
$text = preg_replace('/'.preg_quote('ඬෙ','#').'/', 'f~', $text); 
$text = preg_replace('/'.preg_quote('ශෙ','#').'/', 'fY', $text); 
$text = preg_replace('/'.preg_quote('ඥෙ','#').'/','f{', $text);
$text = preg_replace('/'.preg_quote('ඳෙ','#').'/','fË', $text); 
$text = preg_replace('/'.preg_quote('ක්‍ෂෙ','#').'/', 'fÌ', $text); 
$text = preg_replace('/'.preg_quote('බෙ','#').'/', 'fn', $text); 
$text = preg_replace('/'.preg_quote('චෙ','#').'/', 'fp', $text);
$text = preg_replace('/'.preg_quote('ඩෙ','#').'/', 'fv', $text);
$text = preg_replace('/'.preg_quote('ෆෙ','#').'/', 'f*', $text);
$text = preg_replace('/'.preg_quote('ගෙ','#').'/', 'f.', $text); 
$text = preg_replace('/'.preg_quote('හෙ','#').'/','fy', $text);
$text = preg_replace('/'.preg_quote('ජෙ','#').'/', 'fc', $text);
$text = preg_replace('/'.preg_quote('කෙ','#').'/','fl', $text);
$text = preg_replace('/'.preg_quote('ලෙ','#').'/', 'f,', $text);
$text = preg_replace('/'.preg_quote('මෙ','#').'/', 'fu', $text);
$text = preg_replace('/'.preg_quote('නෙ','#').'/','fk', $text);
$text = preg_replace('/'.preg_quote('පෙ','#').'/', 'fm', $text);
$text = preg_replace('/'.preg_quote('දෙ','#').'/','fo', $text);
$text = preg_replace('/'.preg_quote('රෙ','#').'/', 'fr', $text);
$text = preg_replace('/'.preg_quote('සෙ','#').'/', 'fi', $text);
$text = preg_replace('/'.preg_quote('ටෙ','#').'/', 'fg', $text);
$text = preg_replace('/'.preg_quote('වෙ','#').'/', 'fj', $text);
$text = preg_replace('/'.preg_quote('තෙ','#').'/','f;', $text);
$text = preg_replace('/'.preg_quote('භෙ','#').'/','fN', $text);
$text = preg_replace('/'.preg_quote('යෙ','#').'/', 'fh', $text);
$text = preg_replace('/'.preg_quote('ඤෙ','#').'/', 'f[', $text);
$text = preg_replace('/'.preg_quote('ධෙ','#').'/', 'fO', $text);
$text = preg_replace('/'.preg_quote('ථෙ','#').'/', 'f:', $text);
$text = preg_replace('/'.preg_quote('තු','#').'/',', $text);=', $text);
$text = preg_replace('/'.preg_quote('ශු','#').'/','Y=', $text);
$text = preg_replace('/'.preg_quote('භු','#').'/','N=', $text);
$text = preg_replace('/'.preg_quote('ගු','#').'/','.=', $text);
$text = preg_replace('/'.preg_quote('කු','#').'/','l=', $text);
$text = preg_replace('/'.preg_quote('තූ','#').'/',', $text);+', $text);
$text = preg_replace('/'.preg_quote('ශූ','#').'/','Y+', $text);
$text = preg_replace('/'.preg_quote('භූ','#').'/','N+', $text);
$text = preg_replace('/'.preg_quote('ගූ','#').'/','.+', $text);
$text = preg_replace('/'.preg_quote('කූ','#').'/','l+', $text);
$text = preg_replace('/'.preg_quote('රු','#').'/','re', $text);
$text = preg_replace('/'.preg_quote('රූ','#').'/','rE', $text); 
$text = preg_replace('/'.preg_quote('ආ','#').'/','wd', $text); 
$text = preg_replace('/'.preg_quote('ඇ','#').'/','we', $text);
$text = preg_replace('/'.preg_quote('ඈ','#').'/','wE', $text); 
$text = preg_replace('/'.preg_quote('ඌ','#').'/','W!', $text);
$text = preg_replace('/'.preg_quote('ඖ','#').'/', 'T!', $text);
$text = preg_replace('/'.preg_quote('ඒ','#').'/', 'ta', $text); 
$text = preg_replace('/'.preg_quote('ඕ','#').'/','´', $text);
$text = preg_replace('/'.preg_quote('ඳි','#').'/', '¢', $text);
$text = preg_replace('/'.preg_quote('ඳී','#').'/', '£', $text);
$text = preg_replace('/'.preg_quote('දූ','#').'/', '¥', $text);
$text = preg_replace('/'.preg_quote('දී','#').'/','§', $text); 
$text = preg_replace('/'.preg_quote('ලූ','#').'/', 'Æ', $text);
$text = preg_replace('/'.preg_quote('ර්‍ය','#').'/', '©', $text); 
$text = preg_replace('/'.preg_quote('ඳූ','#').'/', 'ª', $text);
$text =preg_replace('/'.preg_quote('ර්','#').'/', '¾', $text);
$text = preg_replace('/'.preg_quote('ඨි','#').'/', 'À', $text); 
$text = preg_replace('/'.preg_quote('ඨී','#').'/', 'Á', $text); 
$text = preg_replace('/'.preg_quote('ඡී','#').'/', 'Â', $text); 
$text = preg_replace('/'.preg_quote('ඛ්','#').'/','Ä', $text);
$text = preg_replace('/'.preg_quote('ඛි','#').'/','Å', $text);
$text = preg_replace('/'.preg_quote('ලු','#').'/', '¨‍', $text);
$text = preg_replace('/'.preg_quote('ඛී','#').'/','Ç', $text);
$text = preg_replace('/'.preg_quote('දි','#').'/','È', $text); 
$text = preg_replace('/'.preg_quote('ච්','#').'/', 'É', $text); 
$text = preg_replace('/'.preg_quote('ජ්','#').'/', 'Ê', $text); 
$text = preg_replace('/'.preg_quote('රී','#').'/', 'Í', $text);
$text = preg_replace('/'.preg_quote('ඪී','#').'/', 'Î', $text); 
$text = preg_replace('/'.preg_quote('ඪී','#').'/', 'Ð,', $text); 
$text = preg_replace('/'.preg_quote('චි','#').'/', 'Ñ', $text); 
$text = preg_replace('/'.preg_quote('ථී','#').'/', 'Ò', $text); 
$text = preg_replace('/'.preg_quote('ථී','#').'/', 'Ó', $text); 
$text = preg_replace('/'.preg_quote('ජී','#').'/', 'Ô', $text); 
$text = preg_replace('/'.preg_quote('චී','#').'/', 'Ö', $text); 
$text = preg_replace('/'.preg_quote('ඞ්','#').'/', 'Ù', $text); 
$text = preg_replace('/'.preg_quote('ඵී','#').'/', 'Ú', $text); 
$text = preg_replace('/'.preg_quote('ට්','#').'/', 'Ü', $text); 
$text = preg_replace('/'.preg_quote('ඵි','#').'/', 'Ý', $text); 
$text = preg_replace('/'.preg_quote('රි','#').'/', 'ß', $text);
$text = preg_replace('/'.preg_quote('ටී','#').'/', 'à', $text); 
$text = preg_replace('/'.preg_quote('ටි','#').'/', 'á', $text); 
$text = preg_replace('/'.preg_quote('ඩ්','#').'/', 'â', $text); 
$text = preg_replace('/'.preg_quote('ඩී','#').'/', 'ã', $text); 
$text = preg_replace('/'.preg_quote('ඩි','#').'/', 'ä', $text); 
$text = preg_replace('/'.preg_quote('ඬ්','#').'/','å', $text);
$text = preg_replace('/'.preg_quote('ඬි','#').'/','ç', $text);
$text = preg_replace('/'.preg_quote('ධ්','#').'/', 'è', $text); 
$text = preg_replace('/'.preg_quote('ඬී','#').'/','é', $text);
$text = preg_replace('/'.preg_quote('ධි','#').'/', 'ê', $text); 
$text = preg_replace('/'.preg_quote('ධී','#').'/', 'ë', $text); 
$text = preg_replace('/'.preg_quote('ථි','#').'/', 'Ó', $text); 
$text = preg_replace('/'.preg_quote('බි','#').'/','ì', $text);
$text = preg_replace('/'.preg_quote('බ්','#').'/','í', $text);
$text = preg_replace('/'.preg_quote('බී','#').'/','î', $text);
$text = preg_replace('/'.preg_quote('ම්','#').'/', 'ï', $text); 
$text = preg_replace('/'.preg_quote('ජි','#').'/', 'ð', $text); 
$text = preg_replace('/'.preg_quote('මි','#').'/', 'ñ', $text); 
$text = preg_replace('/'.preg_quote('ඹ්','#').'/','ò', $text);
$text = preg_replace('/'.preg_quote('මී','#').'/', 'ó', $text); 
$text = preg_replace('/'.preg_quote('ඹි','#').'/','ô', $text);
$text = preg_replace('/'.preg_quote('ව්','#').'/', 'õ', $text);
$text = preg_replace('/'.preg_quote('ඹී','#').'/','ö', $text);
$text = preg_replace('/'.preg_quote('ඳු','#').'/', '÷', $text);
$text = preg_replace('/'.preg_quote('වී','#').'/', 'ù', $text);
$text = preg_replace('/'.preg_quote('ඟු','#').'/','Õ=‍', $text);
$text = preg_replace('/'.preg_quote('වි','#').'/', 'ú', $text);
$text = preg_replace('/'.preg_quote('ඞ්','#').'/', 'û', $text); 
$text = preg_replace('/'.preg_quote('ඞී','#').'/','ü', $text);
$text = preg_replace('/'.preg_quote('ඡි','#').'/', 'ý', $text); 
$text = preg_replace('/'.preg_quote('ඡ්','#').'/', 'þ', $text); 
$text = preg_replace('/'.preg_quote('දු','#').'/', 'ÿ', $text);
$text = preg_replace('/'.preg_quote('ර්‍ණ','#').'/','“', $text);
$text = preg_replace('/'.preg_quote('ණී','#').'/','Œ', $text);
$text = preg_replace('/'.preg_quote('ණි','#').'/','‚', $text);
$text = preg_replace('/'.preg_quote('ජී','#').'/', 'Ô', $text); 
$text = preg_replace('/'.preg_quote('ඡි','#').'/', 'ð', $text); 
$text = preg_replace('/'.preg_quote('ඩි','#').'/', 'ä', $text); 
$text = preg_replace('/'.preg_quote('ඤු','#').'/','û', $text);
$text = preg_replace('/'.preg_quote('ග','#').'/','.', $text);
$text = preg_replace('/'.preg_quote('ළු','#').'/', '¿', $text); 
$text = preg_replace('/'.preg_quote('ෂ','#').'/', 'I', $text); 
$text = preg_replace('/'.preg_quote('ං','#').'/','x', $text); 
$text = preg_replace('/'.preg_quote('ඃ','#').'/','#', $text);
$text = preg_replace('/'.preg_quote('ඹ','#').'/','U', $text);
$text = preg_replace('/'.preg_quote('ඡ','#').'/', 'P', $text); 
$text = preg_replace('/'.preg_quote('ඪ','#').'/', 'V', $text); 
$text = preg_replace('/'.preg_quote('ඝ','#').'/', '>', $text); 
$text = preg_replace('/'.preg_quote('ඊ','#').'/', 'B', $text); 
$text = preg_replace('/'.preg_quote('ඣ','#').'/', 'CO', $text);
$text = preg_replace('/'.preg_quote('ඛ','#').'/','L', $text);
$text = preg_replace('/'.preg_quote('ළ','#').'/', '<', $text); 
$text = preg_replace('/'.preg_quote('ඟ','#').'/','Õ', $text);
$text = preg_replace('/'.preg_quote('ණ','#').'/','K', $text);
$text = preg_replace('/'.preg_quote('ඵ','#').'/', 'M', $text); 
$text = preg_replace('/'.preg_quote('ඨ','#').'/', 'G', $text); 
$text = preg_replace('/'.preg_quote('ඃ','#').'/','#', $text);
$text = preg_replace('/'.preg_quote('\"','#').'/','˜‍', $text); 
$text = '/\\//'; // preg_replace('/'.preg_quote('\/\\//','#').'/','$', $text); 
$text = preg_replace('/'.preg_quote('\)','#').'/','&', $text); 
$text = preg_replace('/'.preg_quote(':','#').'/', '(', $text); 
$text = preg_replace('/'.preg_quote('-','#').'/', '-', $text); 
$text = preg_replace('/'.preg_quote('ෆ','#').'/', '*', $text); 
$text = preg_replace('/'.preg_quote('ල','#').'/', ',', $text); 
$text = preg_replace('/'.preg_quote('-','#').'/', '-', $text); 
$text = preg_replace('/'.preg_quote('රැ','#').'/','/', $text); 
$text = preg_replace('/'.preg_quote('ථ','#').'/', ':', $text); 
$text = preg_replace('/'.preg_quote('ත','#').'/',', $text);', $text);
$text = preg_replace('/'.preg_quote('ළ','#').'/', '<', $text); 
$text = preg_replace('/'.preg_quote('ඝ','#').'/', '>', $text); 
$text = preg_replace('/'.preg_quote('රෑ','#').'/','?', $text); 
$text = preg_replace('/'.preg_quote('ඊ','#').'/', 'B', $text); 
$text = preg_replace('/'.preg_quote('ක‍','#').'/','C', $text);
$text = preg_replace('/'.preg_quote('‍ෘ','#').'/','D', $text); 
$text = preg_replace('/'.preg_quote('ෑ','#').'/','E', $text);
$text = preg_replace('/'.preg_quote('ත‍','#').'/','F', $text);
$text = preg_replace('/'.preg_quote('ඨ','#').'/', 'G', $text); 
$text = preg_replace('/'.preg_quote('්‍ය','#').'/','H', $text);
$text = preg_replace('/'.preg_quote('ෂ','#').'/', 'I', $text); 
$text = preg_replace('/'.preg_quote('ඬ','#').'/','~', $text);
$text = preg_replace('/'.preg_quote('න‍','#').'/','J', $text);
$text = preg_replace('/'.preg_quote('ණ','#').'/','K', $text);
$text = preg_replace('/'.preg_quote('ඛ','#').'/','L', $text);
$text = preg_replace('/'.preg_quote('ඵ','#').'/', 'M', $text); 
$text = preg_replace('/'.preg_quote('භ','#').'/','N', $text);
$text = preg_replace('/'.preg_quote('ධ','#').'/', 'O', $text); 
$text = preg_replace('/'.preg_quote('ඡ','#').'/', 'P', $text); 
$text = preg_replace('/'.preg_quote('ඍ','#').'/','R', $text);
$text = preg_replace('/'.preg_quote('ඔ','#').'/','T', $text);
$text = preg_replace('/'.preg_quote('ඹ','#').'/','U', $text);
$text = preg_replace('/'.preg_quote('ඪ','#').'/', 'V', $text); 
$text = preg_replace('/'.preg_quote('උ','#').'/', 'W', $text);
$text = preg_replace('/'.preg_quote('ශ','#').'/','Y', $text);
$text = preg_replace('/'.preg_quote('ඤ','#').'/','[', $text);
$text = preg_replace('/'.preg_quote('ඉ','#').'/', 'b', $text);
$text = preg_replace('/'.preg_quote('ජ','#').'/', 'c', $text); 
$text = preg_replace('/'.preg_quote('ට','#').'/', 'g', $text); 
$text = preg_replace('/'.preg_quote('ය','#').'/', 'h', $text); 
$text = preg_replace('/'.preg_quote('ස','#').'/', 'i', $text); 
$text = preg_replace('/'.preg_quote('ව','#').'/', 'j', $text);
$text = preg_replace('/'.preg_quote('න','#').'/','k', $text);
$text = preg_replace('/'.preg_quote('ක','#').'/','l', $text);
$text = preg_replace('/'.preg_quote('ප','#').'/', 'm', $text); 
$text = preg_replace('/'.preg_quote('බ','#').'/','n', $text);
$text = preg_replace('/'.preg_quote('ද','#').'/','o', $text); 
$text = preg_replace('/'.preg_quote('ච','#').'/', 'p', $text); 
$text = preg_replace('/'.preg_quote('ර','#').'/', 'r', $text);
$text = preg_replace('/'.preg_quote('එ','#').'/', 't', $text); 
$text = preg_replace('/'.preg_quote('ම','#').'/', 'u', $text); 
$text = preg_replace('/'.preg_quote('ඩ','#').'/', 'v', $text); 
$text = preg_replace('/'.preg_quote('අ','#').'/', 'w', $text);
$text = preg_replace('/'.preg_quote('හ','#').'/','y', $text);
$text = preg_replace('/'.preg_quote('ඥ','#').'/','{', $text); 
$text = preg_replace('/'.preg_quote('ඳ','#').'/', '|', $text);
$text = preg_replace('/'.preg_quote('ක්‍ෂ','#').'/', 'Ì', $text);
$text = preg_replace('/'.preg_quote('ැ','#').'/','e', $text);
$text = preg_replace('/'.preg_quote('ෑ','#').'/','E', $text);
$text = preg_replace('/'.preg_quote('ෙ','#').'/','f', $text); 
$text = preg_replace('/'.preg_quote('ු','#').'/', 'q', $text);
$text = preg_replace('/'.preg_quote('ි','#').'/', 's', $text);
$text = preg_replace('/'.preg_quote('ූ','#').'/', 'Q', $text);
$text = preg_replace('/'.preg_quote('ී','#').'/', 'S', $text);
$text = preg_replace('/'.preg_quote('ෘ','#').'/','D', $text); 
$text = preg_replace('/'.preg_quote('ෲ','#').'/', 'DD', $text);
$text = preg_replace('/'.preg_quote('ෟ','#').'/','!', $text);
$text = preg_replace('/'.preg_quote('ා','#').'/','d', $text);
$text = preg_replace('/'.preg_quote('්','#').'/', 'a', $text);
$text = preg_replace('/'.preg_quote('￦','#').'/','"', $text);
$text = preg_replace('/'.preg_quote('�','#').'/', 'z', $text); 
$text = preg_replace('/'.preg_quote('￫','#').'/', '^', $text);
$text = preg_replace('/'.preg_quote('￩','#').'/', '&', $text);
$text = preg_replace('/'.preg_quote('ￔ','#').'/', ')', $text);
$text = preg_replace('/'.preg_quote('ￓ','#').'/', '@', $text);
$text = preg_replace('/'.preg_quote('ￒ','#').'/', '`', $text);
$text = preg_replace('/'.preg_quote('ￏ','#').'/', '}', $text);
$text = preg_replace('/'.preg_quote('ￎ','#').'/', "'");
$text = preg_replace('/'.preg_quote('\ￍ','#').'/','¤', $text);
$text = preg_replace('/'.preg_quote('\ￌ','#').'/','•', $text);
$text = preg_replace('/'.preg_quote('\ￊ','#').'/','›', $text);
$text = preg_replace('/'.preg_quote('\ﾶ','#').'/','∙', $text);
$text = preg_replace('/'.preg_quote('ￕ','#').'/', ']', $text);
$text = preg_replace('/'.preg_quote('ඏ','#').'/','Ì', $text);
$text = preg_replace('/'.preg_quote('ඐ','#').'/', 'Ï', $text);
$text = preg_replace('/'.preg_quote('ඦ','#').'/','`c', $text);
$text = preg_replace('/'.preg_quote('“','#').'/', '—', $text); 
$text = preg_replace('/'.preg_quote('”','#').'/', '˜', $text); 
$text = preg_replace('/'.preg_quote('`ca','#').'/', '`Ê', $text); 
$text = preg_replace('/'.preg_quote('`cs','#').'/', '`ð', $text); 