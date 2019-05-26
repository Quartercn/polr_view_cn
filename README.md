# polr_view_cn

> chinese view for polr

## Usage

```
cd polr/resources && rm -rf *
git clone https://gitea.shiruihua.app/Quarter/polr_view_cn.git
mv polr_view_cn/view . && mv polr_view_cn/lang . && cd ..
vim .env
# APP_LOCALE = en -> APP_LOCALE = cn
# APP_FALLBACK_LOCALE = en -> APP_FALLBACK_LOCALE = cn
```