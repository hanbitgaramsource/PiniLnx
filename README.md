# PiniLnx
 MediaWiki용 Lnx Code Viewer 확장플러그인

## LNX란 무엇인가요?
- 피니엔진(PiniEngine)에서 사용되는 스크립트 코드입니다.
- 위키에서 명령어가 잘 안보이길래 만들었습니다.

## 적용방법
1. LocalSetting.php 파일 맨 마지막 줄에 다음 문구를 추가합니다.
```
wfLoadExtension( 'PiniLnx' );
```

2. extensions 폴더에 PiniLnx 폴더를 생성하고 모든 파일을 통째로 업로드합니다.
3. 끝

## 지원버전
- 미디어위키 버전 1.25 이상

## 라이센스
- 한빛가람 제한적 소프트웨어 배포 라이선스 버전 2
- Hooks 소스코드 수정허용. (꾸밀 필요가 없어서 꾸미지 않았습니다.)
- 제약조건 : 개인용이나 위키에 업로드하는 용도로만 사용가능.