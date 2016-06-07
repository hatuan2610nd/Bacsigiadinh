package com.mta.th10.bacsigiadinh.db;

import java.util.ArrayList;
import java.util.List;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import mta.th10.bacsigiadinh.models.NhomThuoc;
import mta.th10.bacsigiadinh.models.Thuoc;

public class ThuocDB {
	public List<NhomThuoc> getAllNhomThuoc() {
		List<NhomThuoc> list = new ArrayList<NhomThuoc>();

		SQLiteDatabase db = MyDB.getInstance().getReadableDatabase();
		Cursor c = db.rawQuery("select id,ten from thuoc_category", null);
		if (c.moveToFirst()) {
			do {
				NhomThuoc n = new NhomThuoc();
				n.setId(c.getString(0));
				n.setTenNhomThuoc(c.getString(1));
				list.add(n);
			} while (c.moveToNext());
		}
		return list;
	}

	public static void setFavorite(Thuoc thuoc, boolean value) {
		SQLiteDatabase db = MyDB.getInstance().getReadableDatabase();
		db.execSQL("update thuoc set is_favorited = " + (value ? "1" : "0") + " where thuoc.id = '"+thuoc.getId()+"'");
	}

	public List<Thuoc> getListThuocFromNhomThuoc(NhomThuoc nhom) {
		List<Thuoc> list = new ArrayList<Thuoc>();

		SQLiteDatabase db = MyDB.getInstance().getReadableDatabase();
		Cursor c = db.rawQuery("select * from thuoc where id_cate = '" + nhom.getId() + "'", null);
		if (c.moveToFirst()) {
			do {
				Thuoc n = new Thuoc();
				n.setBaoQuan(c.getString(c.getColumnIndex("bao_quan")));
				n.setChiDinh(c.getString(c.getColumnIndex("chi_dinh")));
				n.setChongChiDinh(c.getString(c.getColumnIndex("chong_chi_dinh")));
				n.setDangBaoChe(c.getString(c.getColumnIndex("dang_bao_che")));
				n.setDePhong(c.getString(c.getColumnIndex("de_phong")));
				n.setDongGoi(c.getString(c.getColumnIndex("dong_goi")));
				n.setHamLuong(c.getString(c.getColumnIndex("ham_luong")));
				n.setImg(c.getString(c.getColumnIndex("img")));
				n.setLieuLuong(c.getString(c.getColumnIndex("lieu_luong")));

				// n.setNhaDangKy(c.getString(c.getColumnIndex("nha_dang_ky")));
				// n.setNhaPhanPhoi(c.getString(c.getColumnIndex("")));

				n.setNhaSanXuat(c.getString(c.getColumnIndex("nsx")));
				n.setNhomDuocLy(c.getString(c.getColumnIndex("duoc_ly")));
				n.setSoDangKy(c.getString(c.getColumnIndex("id")));
				n.setTacDungPhu(c.getString(c.getColumnIndex("tac_dung_phu")));
				n.setTenThuoc(c.getString(c.getColumnIndex("ten")));
				n.setThanhPhan(c.getString(c.getColumnIndex("thanh_phan")));
				n.setTuongTacThuoc(c.getString(c.getColumnIndex("tuong_tac")));
				n.setFavorite(c.getInt(c.getColumnIndex("is_favorited")) == 0 ? false : true);
				list.add(n);
			} while (c.moveToNext());
		}
		return list;
	}
	
	
	public List<Thuoc> getListThuocFav() {
		List<Thuoc> list = new ArrayList<Thuoc>();

		SQLiteDatabase db = MyDB.getInstance().getReadableDatabase();
		Cursor c = db.rawQuery("select * from thuoc where is_favorited = 1", null);
		if (c.moveToFirst()) {
			do {
				Thuoc n = new Thuoc();
				n.setBaoQuan(c.getString(c.getColumnIndex("bao_quan")));
				n.setChiDinh(c.getString(c.getColumnIndex("chi_dinh")));
				n.setChongChiDinh(c.getString(c.getColumnIndex("chong_chi_dinh")));
				n.setDangBaoChe(c.getString(c.getColumnIndex("dang_bao_che")));
				n.setDePhong(c.getString(c.getColumnIndex("de_phong")));
				n.setDongGoi(c.getString(c.getColumnIndex("dong_goi")));
				n.setHamLuong(c.getString(c.getColumnIndex("ham_luong")));
				n.setImg(c.getString(c.getColumnIndex("img")));
				n.setLieuLuong(c.getString(c.getColumnIndex("lieu_luong")));

				// n.setNhaDangKy(c.getString(c.getColumnIndex("nha_dang_ky")));
				// n.setNhaPhanPhoi(c.getString(c.getColumnIndex("")));

				n.setNhaSanXuat(c.getString(c.getColumnIndex("nsx")));
				n.setNhomDuocLy(c.getString(c.getColumnIndex("duoc_ly")));
				n.setSoDangKy(c.getString(c.getColumnIndex("id")));
				n.setTacDungPhu(c.getString(c.getColumnIndex("tac_dung_phu")));
				n.setTenThuoc(c.getString(c.getColumnIndex("ten")));
				n.setThanhPhan(c.getString(c.getColumnIndex("thanh_phan")));
				n.setTuongTacThuoc(c.getString(c.getColumnIndex("tuong_tac")));
				n.setFavorite(c.getInt(c.getColumnIndex("is_favorited")) == 0 ? false : true);
				list.add(n);
			} while (c.moveToNext());
		}
		return list;
	}
}
